import os
import re
import json
from pathlib import Path

root = Path(__file__).resolve().parent
mig_dir = root / 'database' / 'migrations'
model_dir = root / 'app' / 'Models'
seeder_dir = root / 'database' / 'seeders'
factory_dir = root / 'database' / 'factories'


def read_text(path):
    return path.read_text(encoding='utf-8', errors='ignore')


def parse_migration(path):
    text = read_text(path)
    table = None
    mode = None
    for m in re.finditer(r"Schema::(create|table)\(\s*['\"]([a-zA-Z0-9_]+)['\"]", text):
        mode, table = m.groups()
    columns = []
    fks = []
    uniques = []
    enums = []
    for stmt in re.finditer(r"\$table->([A-Za-z0-9_]+)\(([^)]*)\)([^;]*);", text, re.S):
        method, args, chain = stmt.groups()
        args = args.strip()
        chain = chain.strip()
        col = None
        if method in ('id', 'timestamps', 'timestampsTz', 'softDeletes', 'softDeletesTz', 'rememberToken', 'nullableMorphs', 'morphs'):
            col = method
        else:
            if args:
                first = args.split(',')[0].strip()
                col = first.strip(" '\"")
        columns.append({'method': method, 'column': col, 'args': args, 'chain': chain})
        if method == 'unique' or '->unique' in chain:
            uniques.append(col)
        if method in ('foreignId', 'foreign') or 'foreignId' in method or 'constrained' in chain:
            target = None
            if 'constrained(' in chain:
                m2 = re.search(r"constrained\(\s*['\"]([a-zA-Z0-9_]+)['\"]\s*\)", chain)
                if m2:
                    target = m2.group(1)
            if target is None and col and col.endswith('_id'):
                target = col[:-3] + 's'
            on_delete = None
            on_update = None
            m2 = re.search(r"->onDelete\(\s*['\"]([A-Za-z_]+)['\"]\s*\)", chain)
            if m2:
                on_delete = m2.group(1)
            m2 = re.search(r"->onUpdate\(\s*['\"]([A-Za-z_]+)['\"]\s*\)", chain)
            if m2:
                on_update = m2.group(1)
            fks.append({'column': col, 'references': target, 'on_delete': on_delete, 'on_update': on_update, 'method': method, 'chain': chain})
        if method == 'enum' or 'enum(' in stmt.group(0):
            values = re.findall(r"['\"]([^'\"]+)['\"]", args)
            enums.append({'column': col, 'values': values})
    return {'file': path.name, 'table': table, 'mode': mode, 'columns': columns, 'foreign_keys': fks, 'uniques': uniques, 'enums': enums}


def parse_model(path):
    text = read_text(path)
    cls = None
    if m := re.search(r'class\s+([A-Za-z0-9_]+)\s+extends\s+Model', text):
        cls = m.group(1)
    namespace = None
    if m := re.search(r'namespace\s+([^;]+);', text):
        namespace = m.group(1).strip()
    uses = re.findall(r'use\s+([^;]+);', text)
    props = {}
    for name in ['fillable', 'guarded', 'casts', 'dates', 'hidden', 'table']:
        m = re.search(r'protected\s+\$(%s)\s*=\s*([^;]+);' % name, text)
        if m:
            props[m.group(1)] = m.group(2).strip()
    ts = None
    if m := re.search(r'public\s+\$timestamps\s*=\s*(false|true)', text):
        ts = m.group(1) == 'true'
    relations = []
    for rel in ['hasOne', 'hasMany', 'belongsTo', 'belongsToMany', 'morphMany', 'morphTo', 'morphOne', 'morphToMany', 'morphedByMany']:
        for m in re.finditer(r'function\s+([A-Za-z0-9_]+)\s*\([^\)]*\)\s*\{([^\}]+)\}', text, re.S):
            body = m.group(2)
            if rel in body:
                params = re.search(rel + r'\(\s*([^\)]+)\)', body)
                relations.append({'method': rel, 'function': m.group(1), 'args': params.group(1).strip() if params else None})
    return {'file': path.name, 'class': cls, 'namespace': namespace, 'uses': uses, 'props': props, 'timestamps': ts, 'relations': relations}


def parse_seeder(path):
    text = read_text(path)
    cls = None
    if m := re.search(r'class\s+([A-Za-z0-9_]+)\s+extends\s+Seeder', text):
        cls = m.group(1)
    namespace = None
    if m := re.search(r'namespace\s+([^;]+);', text):
        namespace = m.group(1).strip()
    uses = re.findall(r'use\s+([^;]+);', text)
    models = sorted(set(re.findall(r'App\\Models\\([A-Za-z0-9_]+)', text)))
    calls = []
    for m in re.finditer(r'\$this->call\(\[([^\]]+)\]\)', text, re.S):
        block = m.group(1)
        calls.extend(re.findall(r'([A-Za-z0-9_]+)::class', block))
    inserts = sorted(set(re.findall(r'DB::table\(\s*["\']([a-z_]+)["\']\s*\)->insert\(', text)))
    factories = sorted(set(re.findall(r'([A-Za-z0-9_]+)::factory\(\)->', text)))
    return {'file': path.name, 'class': cls, 'namespace': namespace, 'uses': uses, 'model_refs': models, 'calls': calls, 'db_tables': inserts, 'factory_usage': factories}


def parse_factory(path):
    text = read_text(path)
    cls = None
    if m := re.search(r'class\s+([A-Za-z0-9_]+)Factory\s+extends\s+Factory', text):
        cls = m.group(1)
    model = None
    if m := re.search(r'protected\s+\$model\s*=\s*([^;]+);', text):
        model = m.group(1).strip()
    namespace = None
    if m := re.search(r'namespace\s+([^;]+);', text):
        namespace = m.group(1).strip()
    uses = re.findall(r'use\s+([^;]+);', text)
    return {'file': path.name, 'class': cls, 'model': model, 'namespace': namespace, 'uses': uses}

migrations = [parse_migration(path) for path in sorted(mig_dir.iterdir()) if path.suffix == '.php']
models = [parse_model(path) for path in sorted(model_dir.iterdir()) if path.suffix == '.php']
seeders = [parse_seeder(path) for path in sorted(seeder_dir.iterdir()) if path.suffix == '.php']
factories = [parse_factory(path) for path in sorted(factory_dir.iterdir()) if path.suffix == '.php']

with open(root / 'seed_analysis_full.json', 'w', encoding='utf-8') as f:
    json.dump({'migrations': migrations, 'models': models, 'seeders': seeders, 'factories': factories}, f, indent=2)
print('done')

import json
import pathlib
import re
from collections import defaultdict

root = pathlib.Path(__file__).resolve().parent
with open(root / 'seed_analysis_full.json', 'r', encoding='utf-8') as f:
    data = json.load(f)

migrations = {m['table']: m for m in data['migrations']}
models = {m['class']: m for m in data['models'] if m['class']}
seeders = {s['class']: s for s in data['seeders'] if s['class']}
factories = {f['class']: f for f in data['factories'] if f['class']}

# Build short import map for seeders
seeder_imports = {}
for s in data['seeders']:
    if s['class']:
        imports = {}
        for use in s['uses']:
            use = use.strip()
            if use.startswith('App\\Models\\'):
                name = use.split('\\')[-1]
                imports[name] = use
        seeder_imports[s['class']] = imports

# Get order from DatabaseSeeder
text = (root / 'database' / 'seeders' / 'DatabaseSeeder.php').read_text(encoding='utf-8', errors='ignore')
order = re.findall(r'([A-Za-z0-9_]+)::class', text)

print('=== RAW SUMMARY ===')
print('MIGRATION TABLES:', len(migrations))
print('MODELS:', len(models))
print('SEEDERS:', len(seeders))
print('FACTORIES:', len(factories))
print('DATABASESEEDER ORDER:')
for idx, name in enumerate(order,1):
    print(f'{idx:02d}. {name}')

print('\n=== MIGRATION FOREIGN KEYS ===')
for table, mig in migrations.items():
    if mig['foreign_keys']:
        print(table)
        for fk in mig['foreign_keys']:
            print('  -', fk)

print('\n=== MIGRATION ENUMS ===')
for table, mig in migrations.items():
    if mig['enums']:
        print(table, mig['enums'])

print('\n=== MODEL PROPERTIES ===')
for name, m in sorted(models.items()):
    props = m.get('props', {})
    print(name, 'timestamps=', m.get('timestamps'), 'fillable=' + ('yes' if 'fillable' in props else 'no'), 'guarded=' + ('yes' if 'guarded' in props else 'no'))
    if props:
        for k,v in props.items():
            print('   ', k, v)
    if m['relations']:
        for rel in m['relations']:
            print('   rel', rel)

print('\n=== FACTORY MODELS ===')
for name, f in sorted(factories.items()):
    print(name, f['model'])

print('\n=== SEEDER MODEL USAGE ===')
for name, s in sorted(seeders.items()):
    print(name)
    if s['namespace']:
        print('   ns', s['namespace'])
    if s['uses']:
        print('   uses', s['uses'])
    if s['model_refs']:
        print('   models', s['model_refs'])
    if s['db_tables']:
        print('   db_tables', s['db_tables'])
    if s['factory_usage']:
        print('   factories', s['factory_usage'])
    if s['calls']:
        print('   calls', s['calls'])

print('\n=== SEEDER IMPORTS ===')
for name, imports in sorted(seeder_imports.items()):
    if imports:
        print(name, imports)

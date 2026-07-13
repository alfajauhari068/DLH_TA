import json
import pathlib
import re

root = pathlib.Path(__file__).resolve().parent
with open(root / 'seed_analysis_full.json', 'r', encoding='utf-8') as f:
    data = json.load(f)

migrations = {m['table']: m for m in data['migrations']}
models = {m['class']: m for m in data['models'] if m['class']}
seeders = {s['class']: s for s in data['seeders'] if s['class']}
factories = {f['class']: f for f in data['factories'] if f['class']}

order = []
text = (root / 'database' / 'seeders' / 'DatabaseSeeder.php').read_text(encoding='utf-8', errors='ignore')
for m in re.findall(r'([A-Za-z0-9_]+)::class', text):
    order.append(m)

issues = []

for cls, s in seeders.items():
    if not s['namespace']:
        issues.append((cls, 'missing namespace'))
    for ref in s['model_refs']:
        if ref not in models:
            issues.append((cls, f'missing model {ref}'))
    for tbl in s['db_tables']:
        if tbl not in migrations:
            issues.append((cls, f'missing table {tbl}'))
    for f in s['factory_usage']:
        if f not in factories:
            issues.append((cls, f'missing factory {f}'))

fk_deps = {}
for t, mig in migrations.items():
    for fk in mig['foreign_keys']:
        if fk['references']:
            fk_deps.setdefault(t, []).append(fk['references'])

print('DatabaseSeeder order:')
print(order)
print('\nISSUES:')
for issue in issues:
    print(issue)
print('\nISSUE COUNT:', len(issues))
print('\nTABLE FOREIGN KEY DEPENDENCIES:')
for t, refs in fk_deps.items():
    print(f'{t} -> {refs}')
print('\nSEEDERS WITH DB::table inserts:')
for cls, s in seeders.items():
    if s['db_tables']:
        print(cls, s['db_tables'])
print('\nMISSING FACTORIES:')
for cls, s in seeders.items():
    if s['factory_usage']:
        for f in s['factory_usage']:
            if f not in factories:
                print(cls, f)
print('\nMIGRATION COUNT:', len(migrations))
print('MODEL COUNT:', len(models))
print('SEEDER COUNT:', len(seeders))
print('FACTORY COUNT:', len(factories))

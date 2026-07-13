import json
with open('seed_analysis.json', 'r', encoding='utf-8') as f:
    data = json.load(f)
print('MIGRATION TABLES:')
for m in data['migrations']:
    print(f"{m['table']} ({m['file']})")
print('\nMODELS:')
for name, m in data['models'].items():
    props = m.get('properties', {})
    flags = []
    if 'guarded' in props:
        flags.append('guarded')
    if 'fillable' in props:
        flags.append('fillable')
    if 'timestamps' in props:
        flags.append(f"timestamps={props['timestamps']}")
    print(f"{name} ({m['file']}) {' '.join(flags)}")
print('\nSEEDERS:')
for s in data['seeders']:
    print(f"{s['class']} ({s['file']}) models:{','.join(s['models'])}")
print('\nDATABASESEEDER TEXT:')
print(data['databaseSeeder']['text'])

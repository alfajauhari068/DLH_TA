<?php
$root = __DIR__;
function scanFiles($pattern) {
    $files = glob($pattern);
    sort($files);
    return $files;
}
function fileText($path) { return file_get_contents($path); }
function regexAll($pattern, $text) { preg_match_all($pattern, $text, $m); return $m; }
function getClassName($text) {
    if (preg_match('/class\s+(\w+)/', $text, $m)) return $m[1];
    return null;
}
function getNamespace($text) {
    if (preg_match('/namespace\s+([^;]+);/', $text, $m)) return trim($m[1]);
    return null;
}
function getImports($text) {
    if (preg_match_all('/use\s+([^;]+);/', $text, $m)) return array_map('trim', $m[1]);
    return [];
}
function extractColumns($text) {
    $columns = [];
    if (preg_match('/Schema::create\(["\'](\w+)["\'].*?\{/s', $text, $m)) {
        $body = substr($text, strpos($text, $m[0]) + strlen($m[0]));
        $level = 1; $i = 0; $len = strlen($body);
        while ($i < $len && $level) {
            $ch = $body[$i++];
            if ($ch === '{') $level++; elseif ($ch === '}') $level--;
        }
        $body = substr($body, 0, $i-1);
        if (preg_match_all('/\$table->(\w+)\(([^)]*)\)(?:->(\w+)\(\))?/', $body, $m2, PREG_SET_ORDER)) {
            foreach ($m2 as $row) {
                $columns[] = ['method'=>$row[1], 'args'=>trim($row[2]), 'modifier'=>$row[3] ?? null];
            }
        }
        if (preg_match_all('/\$table->foreignId\(([^)]+)\)->constrained(?:\(([^)]*)\))?/', $body, $m2, PREG_SET_ORDER)) {
            foreach ($m2 as $row) {
                $columns[] = ['foreignId'=>$row[1], 'constrained'=>isset($row[2])?trim($row[2]):null];
            }
        }
    }
    return $columns;
}
function extractRelationships($text) {
    $rels = [];
    if (preg_match_all('/function\s+(\w+)\s*\([^)]*\)\s*:\s*[^\{]*\{([^}]*)\}/s', $text, $m, PREG_SET_ORDER)) {
        foreach ($m as $block) {
            if (preg_match('/return\s+\$this->(belongsTo|hasMany|belongsToMany|morphMany|morphTo|hasOne)\s*\(([^;]+)\)/', $block[2], $mr)) {
                $rels[] = ['method'=>$block[1], 'relation'=>$mr[1], 'args'=>trim($mr[2])];
            }
        }
    }
    return $rels;
}
function extractProperties($text) {
    $props = [];
    if (preg_match_all('/public\s+\$([a-zA-Z_][a-zA-Z0-9_]*)\s*=\s*([^;]+);/', $text, $m, PREG_SET_ORDER)) {
        foreach ($m as $row) { $props[$row[1]] = trim($row[2]); }
    }
    if (preg_match_all('/protected\s+\$([a-zA-Z_][a-zA-Z0-9_]*)\s*=\s*([^;]+);/', $text, $m, PREG_SET_ORDER)) {
        foreach ($m as $row) { $props[$row[1]] = trim($row[2]); }
    }
    return $props;
}
function extractSeederModels($text) {
    $models = [];
    if (preg_match_all('/use\s+App\\Models\\(\w+);/', $text, $m)) {
        $models = array_merge($models, $m[1]);
    }
    if (preg_match_all('/([A-Z][A-Za-z0-9_]+)::(firstOrCreate|updateOrCreate|create|factory|truncate|unguarded|insert|upsert)/', $text, $m, PREG_SET_ORDER)) {
        foreach ($m as $row) { $models[] = $row[1]; }
    }
    return array_values(array_unique($models));
}
function extractSeederClasses($text) { return getClassName($text); }
function extractDbSeederOrder($text) {
    $items = [];
    if (preg_match_all('/\$this->call\(\s*([A-Za-z0-9_]+::class)\s*\)/', $text, $m)) {
        foreach ($m[1] as $class) { $items[] = $class; }
    }
    return $items;
}
$migrations = [];
foreach (scanFiles('database/migrations/*.php') as $file) {
    $text = fileText($file);
    if (!preg_match('/Schema::create\(["\'](\w+)["\']/', $text, $m)) continue;
    $migrations[] = ['file'=>basename($file), 'table'=>$m[1], 'columns'=>extractColumns($text), 'text'=>$text];
}
$models = [];
foreach (scanFiles('app/Models/*.php') as $file) {
    $text = fileText($file);
    $name = getClassName($text);
    $models[$name] = ['file'=>basename($file), 'namespace'=>getNamespace($text), 'imports'=>getImports($text),'properties'=>extractProperties($text),'relationships'=>extractRelationships($text),'text'=>$text];
}
$seeders = [];
foreach (scanFiles('database/seeders/*.php') as $file) {
    $text = fileText($file);
    $name = getClassName($text);
    $seeders[] = ['file'=>basename($file), 'class'=>$name, 'namespace'=>getNamespace($text),'imports'=>getImports($text),'models'=>extractSeederModels($text),'text'=>$text];
}
$dbSeeder = fileText('database/seeders/DatabaseSeeder.php');
$result = ['migrations'=>$migrations,'models'=>$models,'seeders'=>$seeders,'databaseSeeder'=>['text'=>$dbSeeder,'calls'=>extractDbSeederOrder($dbSeeder)]];
file_put_contents('seed_analysis.json', json_encode($result, JSON_PRETTY_PRINT));
echo "DONE\n";
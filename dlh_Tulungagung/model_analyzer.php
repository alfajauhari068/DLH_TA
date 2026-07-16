<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use Illuminate\Support\Facades\File;

$modelsPath = app_path('Models');
$models = File::files($modelsPath);

foreach ($models as $modelFile) {
    $modelClass = 'App\\Models\\' . $modelFile->getFilenameWithoutExtension();
    if (!class_exists($modelClass)) continue;
    
    $reflection = new ReflectionClass($modelClass);
    echo "\nMODEL: " . $modelClass . "\n";
    
    // Fillable
    $fillableProp = $reflection->getProperty('fillable');
    $fillableProp->setAccessible(true);
    $fillable = $fillableProp->getValue(new $modelClass) ?? [];
    echo "- Fillable: " . implode(', ', $fillable) . "\n";

    // Traits
    $traits = $reflection->getTraitNames();
    echo "- Traits: " . implode(', ', $traits) . "\n";

    // Methods (Potential Relationships)
    $methods = $reflection->getMethods(ReflectionMethod::IS_PUBLIC);
    echo "- Methods: ";
    $methodNames = [];
    foreach ($methods as $method) {
        if ($method->class == $modelClass && $method->name !== '__construct') {
            $methodNames[] = $method->name;
        }
    }
    echo implode(', ', $methodNames) . "\n";
}

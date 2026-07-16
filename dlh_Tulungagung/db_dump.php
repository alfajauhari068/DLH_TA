<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

$tables = DB::select('SHOW TABLES');
foreach($tables as $table) {
    $tableName = array_values((array)$table)[0];
    if (in_array($tableName, ['migrations', 'failed_jobs', 'personal_access_tokens', 'password_reset_tokens'])) continue;
    
    echo "TABLE: $tableName\n";
    $columns = Schema::getColumnListing($tableName);
    foreach($columns as $col) {
        $type = Schema::getColumnType($tableName, $col);
        echo " - $col ($type)\n";
    }
    
    echo " INDEXES:\n";
    $indexes = DB::select("SHOW INDEX FROM $tableName");
    foreach($indexes as $index) {
        if ($index->Key_name === 'PRIMARY') continue;
        echo " - " . $index->Key_name . " (" . $index->Column_name . ")\n";
    }
    
    echo " FOREIGN KEYS:\n";
    $fks = DB::select("SELECT CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_TABLE_NAME, REFERENCED_COLUMN_NAME FROM information_schema.KEY_COLUMN_USAGE WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = '$tableName' AND REFERENCED_TABLE_NAME IS NOT NULL");
    foreach($fks as $fk) {
        echo " - " . $fk->COLUMN_NAME . " -> " . $fk->REFERENCED_TABLE_NAME . "(" . $fk->REFERENCED_COLUMN_NAME . ")\n";
    }
    echo "\n";
}

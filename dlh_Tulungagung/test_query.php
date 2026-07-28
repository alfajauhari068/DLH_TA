<?php
$request = new \Illuminate\Http\Request(['search' => 'adiwiyata', 'status' => 'published', 'category' => '1', 'sort' => 'newest', 'date' => '2026-01-01 to 2026-07-20']);
$query = \App\Models\News::query();
$query = \App\Services\CrudQuery::apply($query, $request);
echo $query->toSql() . "\n";
print_r($query->getBindings());

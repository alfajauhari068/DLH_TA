<?php
$gallery = \App\Models\Gallery::first();
echo "Gallery:\n";
print_r($gallery ? $gallery->toArray() : 'No galleries');

$publication = \App\Models\Publication::first();
echo "\nPublication:\n";
print_r($publication ? $publication->toArray() : 'No publications');

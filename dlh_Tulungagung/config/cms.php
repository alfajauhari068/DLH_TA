<?php

return [
    'pagination' => [
        'default' => 15,
        'options' => [10, 15, 25, 50, 100],
    ],

    'search' => [
        'default_columns' => ['title', 'slug', 'content'],
        'fuzzy' => true,
    ],

    'status' => [
        'draft' => 0,
        'published' => 1,
        'archived' => 2,
    ],

    'uploads' => [
        'max_size_kb' => 5120,
        'image_types' => ['jpeg', 'png', 'webp', 'gif'],
    ],

    'slug' => [
        'separator' => '-',
        'lower' => true,
    ],
];

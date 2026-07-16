<?php

namespace App\Services;

use App\Models\News;

class NewsService extends ModuleService
{
    public function __construct()
    {
        parent::__construct(News::class, [
            'slug' => true,
            'publish' => true,
            'archive' => true,
            'soft_delete' => true,
            'audit' => true,
        ]);
    }
}


<?php

namespace App\Services;

use App\Models\Gallery;

class GalleryService extends ModuleService
{
    public function __construct()
    {
        parent::__construct(Gallery::class, [
            'slug' => true,
            'publish' => true,
            'archive' => true,
            'soft_delete' => true,
            'audit' => true,
            'media' => true,
        ]);
    }
}

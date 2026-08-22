<?php

namespace App\Repositories;

use App\Models\Page;

class PageRepository extends EloquentRepository
{
    public function __construct()
    {
        parent::__construct(Page::class);
    }
}

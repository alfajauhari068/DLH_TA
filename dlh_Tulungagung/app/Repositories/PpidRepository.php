<?php

namespace App\Repositories;

use App\Models\PpidDocument;

class PpidRepository extends EloquentRepository
{
    public function __construct()
    {
        parent::__construct(PpidDocument::class);
    }
}

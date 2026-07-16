<?php

namespace App\Repositories;

use App\Models\Download;

class DownloadRepository extends EloquentRepository
{
    public function __construct()
    {
        parent::__construct(Download::class);
    }
}

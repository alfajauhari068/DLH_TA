<?php

namespace App\Services;

use App\Models\Official;

class OfficialService extends ModuleService
{
    public function __construct()
    {
        parent::__construct(Official::class);
    }
}

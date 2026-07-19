<?php

namespace App\Services;

use App\Models\SkmScore;

class SkmScoreService extends ModuleService
{
    public function __construct()
    {
        parent::__construct(SkmScore::class);
    }
}

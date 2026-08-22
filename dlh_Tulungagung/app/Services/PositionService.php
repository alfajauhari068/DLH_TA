<?php

namespace App\Services;

use App\Models\Position;

class PositionService extends ModuleService
{
    public function __construct()
    {
        parent::__construct(Position::class);
    }
}

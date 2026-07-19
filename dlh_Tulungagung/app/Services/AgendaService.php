<?php

namespace App\Services;

use App\Models\Agenda;

class AgendaService extends ModuleService
{
    public function __construct()
    {
        parent::__construct(Agenda::class);
    }
}

<?php

namespace App\Services;

use App\Models\Agenda;

class AgendaService extends ModuleService
{
    public function __construct()
    {
        parent::__construct(Agenda::class);
    }

    protected function normalizeSlug(array &$data, ?\Illuminate\Database\Eloquent\Model $model = null): void
    {
        // Agendas do not use slugs, so we bypass the slug generation in ModuleService.
    }
}

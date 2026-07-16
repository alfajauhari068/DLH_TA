<?php

namespace App\Traits;

trait HasCreatedBy
{
    public function createdBy()
    {
        return $this->belongsTo(config('auth.providers.users.model'), 'created_by');
    }
}

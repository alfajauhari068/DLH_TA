<?php

namespace App\Traits;

trait HasUpdatedBy
{
    public function updatedBy()
    {
        return $this->belongsTo(config('auth.providers.users.model'), 'updated_by');
    }
}

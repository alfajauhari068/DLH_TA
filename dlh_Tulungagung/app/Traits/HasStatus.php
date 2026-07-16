<?php

namespace App\Traits;

trait HasStatus
{
    public function scopeWithStatus($query, $status)
    {
        return $query->where('status', $status);
    }
}

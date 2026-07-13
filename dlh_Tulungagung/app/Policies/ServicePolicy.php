<?php

namespace App\Policies;

use App\Models\Service;
use App\Models\User;

class ServicePolicy
{
    public function viewAny(User $user): bool
    {
        return $user->hasPermission('Service.View');
    }

    public function view(User $user, Service $service): bool
    {
        return $user->hasPermission('Service.View');
    }
}

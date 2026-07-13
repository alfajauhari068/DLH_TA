<?php

namespace App\Policies;

use App\Models\Publication;
use App\Models\User;

class PublicationPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->hasPermission('Publication.View');
    }

    public function view(User $user, Publication $publication): bool
    {
        return $user->hasPermission('Publication.View');
    }

    public function create(User $user): bool
    {
        return $user->hasPermission('Publication.Create');
    }

    public function update(User $user, Publication $publication): bool
    {
        return $user->hasPermission('Publication.Update');
    }

    public function delete(User $user, Publication $publication): bool
    {
        return $user->hasPermission('Publication.Delete');
    }
}

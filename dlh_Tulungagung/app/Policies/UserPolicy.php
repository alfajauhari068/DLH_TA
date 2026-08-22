<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->hasPermission('Users.View');
    }

    public function view(User $user, User $model): bool
    {
        return $user->hasPermission('Users.View');
    }

    public function create(User $user): bool
    {
        return $user->hasPermission('Users.Create');
    }

    public function update(User $user, User $model): bool
    {
        return $user->hasPermission('Users.Update');
    }

    public function delete(User $user, User $model): bool
    {
        return $user->hasPermission('Users.Delete');
    }
}

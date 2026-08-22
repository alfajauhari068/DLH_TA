<?php

namespace App\Policies;

use App\Models\User;

abstract class CrudPolicy
{
    protected string $viewPermission;

    protected string $createPermission;

    protected string $updatePermission;

    protected string $deletePermission;

    public function viewAny(User $user): bool
    {
        return $user->hasPermission($this->viewPermission);
    }

    public function view(User $user, mixed $model): bool
    {
        return $user->hasPermission($this->viewPermission);
    }

    public function create(User $user): bool
    {
        return $user->hasPermission($this->createPermission);
    }

    public function update(User $user, mixed $model): bool
    {
        return $user->hasPermission($this->updatePermission);
    }

    public function delete(User $user, mixed $model): bool
    {
        return $user->hasPermission($this->deletePermission);
    }

    public function restore(User $user, mixed $model): bool
    {
        return $user->hasPermission($this->updatePermission);
    }

    public function forceDelete(User $user, mixed $model): bool
    {
        return $user->hasPermission($this->deletePermission);
    }
}

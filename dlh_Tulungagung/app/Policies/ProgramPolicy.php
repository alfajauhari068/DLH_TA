<?php

namespace App\Policies;

use App\CMS\Infrastructure\Registry\PermissionRegistry;
use App\Models\Program;
use App\Models\User;

class ProgramPolicy extends CrudPolicy
{
    protected string $viewPermission = 'Program.View';
    protected string $createPermission = 'Program.Create';
    protected string $updatePermission = 'Program.Update';
    protected string $deletePermission = 'Program.Delete';

    public function publish(User $user, Program $program): bool
    {
        return $user->hasPermission('Program.Publish');
    }

    public function feature(User $user, Program $program): bool
    {
        return $user->hasPermission('Program.Publish');
    }

    public function restore(User $user, mixed $program): bool
    {
        return $user->hasPermission('Program.Update') || $user->hasPermission('Program.Delete');
    }

    public function forceDelete(User $user, mixed $program): bool
    {
        return $user->hasPermission('Program.Delete');
    }
}

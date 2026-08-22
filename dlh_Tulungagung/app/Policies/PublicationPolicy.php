<?php

namespace App\Policies;

use App\CMS\Infrastructure\Registry\PermissionRegistry;
use App\Models\Publication;
use App\Models\User;

class PublicationPolicy extends CrudPolicy
{
    protected string $viewPermission = 'Publication.View';
    protected string $createPermission = 'Publication.Create';
    protected string $updatePermission = 'Publication.Update';
    protected string $deletePermission = 'Publication.Delete';

    public function publish(User $user, Publication $publication): bool
    {
        return $user->hasPermission('Publication.Publish');
    }

    public function restore(User $user, mixed $publication): bool
    {
        return $user->hasPermission('Publication.Update') || $user->hasPermission('Publication.Delete');
    }

    public function forceDelete(User $user, mixed $publication): bool
    {
        return $user->hasPermission('Publication.Delete');
    }
}

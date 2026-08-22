<?php

namespace App\Policies;

use App\CMS\Infrastructure\Registry\PermissionRegistry;
use App\Models\Service;
use App\Models\User;

class ServicePolicy extends CrudPolicy
{
    protected string $viewPermission;
    protected string $createPermission;
    protected string $updatePermission;
    protected string $deletePermission;

    public function __construct()
    {
        $permissions = PermissionRegistry::defaultPermissions('Service');
        $this->viewPermission = $permissions[0];
        $this->createPermission = $permissions[1];
        $this->updatePermission = $permissions[2];
        $this->deletePermission = $permissions[3];
    }

    public function publish(User $user, Service $service): bool
    {
        return $user->hasPermission('Service.Publish');
    }

    public function feature(User $user, Service $service): bool
    {
        return $user->hasPermission('Service.Publish');
    }
}

<?php

namespace App\CMS\Infrastructure\Registry;

class PermissionRegistry
{
    public static function defaultPermissions(string $prefix): array
    {
        return [
            $prefix . '.view',
            $prefix . '.create',
            $prefix . '.update',
            $prefix . '.delete',
            $prefix . '.restore',
            $prefix . '.forceDelete',
            $prefix . '.publish',
            $prefix . '.archive',
        ];
    }
}

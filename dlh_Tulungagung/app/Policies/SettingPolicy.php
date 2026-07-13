<?php

namespace App\Policies;

use App\Models\Setting;
use App\Models\User;

class SettingPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->hasPermission('Settings.View');
    }

    public function view(User $user, Setting $setting): bool
    {
        return $user->hasPermission('Settings.View');
    }

    public function update(User $user, Setting $setting): bool
    {
        return $user->hasPermission('Settings.Update');
    }
}

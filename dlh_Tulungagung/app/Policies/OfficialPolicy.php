<?php

namespace App\Policies;

use App\Models\Official;
use App\Models\User;

class OfficialPolicy extends CrudPolicy
{
    protected string $viewPermission = 'Settings.View';
    protected string $createPermission = 'Settings.Update';
    protected string $updatePermission = 'Settings.Update';
    protected string $deletePermission = 'Settings.Update';
}

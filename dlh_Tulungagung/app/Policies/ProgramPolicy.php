<?php

namespace App\Policies;

use App\Models\Program;
use App\Models\User;

class ProgramPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->hasPermission('Program.View');
    }

    public function view(User $user, Program $program): bool
    {
        return $user->hasPermission('Program.View');
    }
}

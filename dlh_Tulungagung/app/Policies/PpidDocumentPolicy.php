<?php

namespace App\Policies;

use App\Models\PpidDocument;
use App\Models\User;

class PpidDocumentPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->hasPermission('PPID.View');
    }

    public function view(User $user, PpidDocument $ppidDocument): bool
    {
        return $user->hasPermission('PPID.View');
    }
}

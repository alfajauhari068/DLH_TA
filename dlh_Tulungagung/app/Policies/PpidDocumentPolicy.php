<?php

namespace App\Policies;

use App\Models\PpidDocument;
use App\Models\User;

class PpidDocumentPolicy extends CrudPolicy
{
    protected string $viewPermission = 'PPID.View';
    protected string $createPermission = 'PPID.Create';
    protected string $updatePermission = 'PPID.Update';
    protected string $deletePermission = 'PPID.Delete';
}

<?php

namespace App\Policies;

use App\Models\User;

class DownloadPolicy extends CrudPolicy
{
    protected string $viewPermission = 'Download.View';
    protected string $createPermission = 'Download.Create';
    protected string $updatePermission = 'Download.Update';
    protected string $deletePermission = 'Download.Delete';
}

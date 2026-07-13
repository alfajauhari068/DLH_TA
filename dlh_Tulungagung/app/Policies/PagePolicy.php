<?php

namespace App\Policies;

use App\Models\Page;
use App\Models\User;

class PagePolicy extends CrudPolicy
{
    protected string $viewPermission = 'Page.View';
    protected string $createPermission = 'Page.Create';
    protected string $updatePermission = 'Page.Update';
    protected string $deletePermission = 'Page.Delete';
}

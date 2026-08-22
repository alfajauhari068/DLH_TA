<?php

namespace App\Policies;

use App\Models\User;

class NewsPolicy extends CrudPolicy
{
    protected string $viewPermission = 'News.View';
    protected string $createPermission = 'News.Create';
    protected string $updatePermission = 'News.Update';
    protected string $deletePermission = 'News.Delete';
}


<?php

namespace App\Policies;

use App\Models\News;
use App\Models\User;

class NewsPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->hasPermission('News.View');
    }

    public function view(User $user, News $news): bool
    {
        return $user->hasPermission('News.View');
    }

    public function create(User $user): bool
    {
        return $user->hasPermission('News.Create');
    }

    public function update(User $user, News $news): bool
    {
        return $user->hasPermission('News.Update');
    }

    public function delete(User $user, News $news): bool
    {
        return $user->hasPermission('News.Delete');
    }
}

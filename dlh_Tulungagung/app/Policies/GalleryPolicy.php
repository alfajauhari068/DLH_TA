<?php

namespace App\Policies;

use App\Models\Gallery;
use App\Models\User;

class GalleryPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->hasPermission('Gallery.View');
    }

    public function view(User $user, Gallery $gallery): bool
    {
        return $user->hasPermission('Gallery.View');
    }

    public function create(User $user): bool
    {
        return $user->hasPermission('Gallery.Create');
    }

    public function update(User $user, Gallery $gallery): bool
    {
        return $user->hasPermission('Gallery.Update');
    }

    public function delete(User $user, Gallery $gallery): bool
    {
        return $user->hasPermission('Gallery.Delete');
    }

    public function restore(User $user, Gallery $gallery): bool
    {
        return $user->hasPermission('Gallery.Restore');
    }

    public function forceDelete(User $user, Gallery $gallery): bool
    {
        return $user->hasPermission('Gallery.ForceDelete');
    }

    public function publish(User $user, Gallery $gallery): bool
    {
        return $user->hasPermission('Gallery.Publish');
    }

    public function archive(User $user, Gallery $gallery): bool
    {
        return $user->hasPermission('Gallery.Archive');
    }
}

<?php

namespace App\Traits;

use App\Models\Media;

trait HasMedia
{
    public function media()
    {
        return $this->morphToMany(Media::class, 'mediaable', 'mediaables');
    }

    public function featuredImage()
    {
        return $this->morphToMany(Media::class, 'mediaable', 'mediaables')
                    ->wherePivot('role', 'featured');
    }
}

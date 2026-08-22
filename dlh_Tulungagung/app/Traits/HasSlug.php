<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait HasSlug
{
    protected static function bootHasSlug()
    {
        static::saving(function ($model) {
            if (empty($model->slug) && ! empty($model->title)) {
                $slug = Str::slug($model->title, config('cms.slug.separator', '-'));
                $model->slug = config('cms.slug.lower', true) ? Str::lower($slug) : $slug;
            }
        });
    }
}

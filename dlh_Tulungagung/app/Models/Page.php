<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Traits\HasMedia;

class Page extends Model
{
    use HasFactory, SoftDeletes, HasMedia;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'banner',
        'featured_image',
        'status',
        'template',
        'seo_title',
        'seo_description',
    ];
}

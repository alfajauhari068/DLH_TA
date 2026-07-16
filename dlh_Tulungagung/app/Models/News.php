<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\HasSlug;
use App\Traits\HasStatus;
use App\Traits\HasCreatedBy;
use App\Traits\HasUpdatedBy;
use App\Models\User;

class News extends Model
{
    use HasFactory, SoftDeletes, HasSlug, HasStatus;

    protected $fillable = [
        'category_id', 'author_id', 'title', 'slug', 'summary', 'content', 'featured_image',
        'published_at', 'status', 'views', 'is_featured', 'seo_title', 'seo_description', 'seo_keywords'
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'is_featured' => 'boolean',
    ];

    // Relationships
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function category()
    {
        return $this->belongsTo(NewsCategory::class, 'category_id');
    }

    public function tags()
    {
        // return $this->morphToMany(Tag::class, 'taggable');
    }

    public function media()
    {
        // return $this->hasMany(Media::class);
    }

}



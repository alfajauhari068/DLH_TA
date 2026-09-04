<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\HasSlug;
use App\Traits\HasStatus;
use App\Traits\HasMedia;
use App\Traits\HasCreatedBy;
use App\Traits\HasUpdatedBy;
use App\Models\User;

class News extends Model
{
    use HasFactory, SoftDeletes, HasSlug, HasStatus, HasMedia;

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

    public function categories()
    {
        return $this->belongsToMany(NewsCategory::class, 'news_news_category', 'news_id', 'news_category_id');
    }

    public function tags()
    {
        // return $this->morphToMany(Tag::class, 'taggable');
    }

    public function getUrlAttribute()
    {
        return route('news.detail', $this->slug);
    }

    public function getImageUrlAttribute()
    {
        return $this->featured_image ? asset('storage/' . $this->featured_image) : asset('images/placeholder-news.svg');
    }

    public function getCategoryNameAttribute()
    {
        return $this->categories->first()->name ?? 'Uncategorized';
    }



}



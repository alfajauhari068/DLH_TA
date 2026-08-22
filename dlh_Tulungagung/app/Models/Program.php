<?php

namespace App\Models;

use App\Traits\HasCreatedBy;
use App\Traits\HasSlug;
use App\Traits\HasStatus;
use App\Traits\HasUpdatedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Traits\HasMedia;

class Program extends Model
{
    use HasFactory, SoftDeletes, HasSlug, HasStatus, HasCreatedBy, HasUpdatedBy, HasMedia;

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'featured_image',
        'status',
        'published_at',
        'created_by',
        'updated_by',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'status' => 'string',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    public function media()
    {
        return $this->morphMany(Media::class, 'model');
    }

    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }

    public function scopeDraft($query)
    {
        return $query->where('status', 'draft');
    }

    public function scopeSearch($query, ?string $term)
    {
        if (empty($term)) {
            return $query;
        }

        return $query->where(function ($q) use ($term) {
            $q->where('title', 'like', "%{$term}%")
                ->orWhere('slug', 'like', "%{$term}%")
                ->orWhere('excerpt', 'like', "%{$term}%")
                ->orWhere('content', 'like', "%{$term}%")
                ->orWhereHas('author', function ($author) use ($term) {
                    $author->where('name', 'like', "%{$term}%");
                });
        });
    }

    public function isPublished(): bool
    {
        return $this->status === 'published';
    }
}

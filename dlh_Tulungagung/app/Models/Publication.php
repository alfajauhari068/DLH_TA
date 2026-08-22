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

class Publication extends Model
{
    use HasFactory, SoftDeletes, HasSlug, HasStatus, HasCreatedBy, HasUpdatedBy, HasMedia;

    protected $fillable = [
        'title',
        'slug',
        'summary',
        'content',
        'cover_file',
        'document_file',
        'category',
        'status',
        'published_at',
        'download_count',
        'featured',
        'sort_order',
        'created_by',
        'updated_by',
    ];

    protected $casts = [
        'featured' => 'boolean',
        'published_at' => 'datetime',
        'download_count' => 'integer',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'updated_by');
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
                ->orWhere('summary', 'like', "%{$term}%")
                ->orWhere('content', 'like', "%{$term}%");
        });
    }
}

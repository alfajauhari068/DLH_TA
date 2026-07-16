<?php

namespace App\Models;

use App\Traits\HasCreatedBy;
use App\Traits\HasSlug;
use App\Traits\HasStatus;
use App\Traits\HasUpdatedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory, SoftDeletes, HasSlug, HasStatus, HasCreatedBy, HasUpdatedBy;

    protected $fillable = [
        'title', 'slug', 'summary', 'description', 'service_type', 'service_category',
        'icon', 'thumbnail', 'banner', 'requirements', 'workflow', 'estimated_time',
        'service_fee', 'contact_person', 'contact_phone', 'contact_email', 'office_location',
        'office_hours', 'status', 'is_featured', 'sort_order', 'published_at', 'created_by', 'updated_by',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'sort_order' => 'integer',
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

    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }

    public function scopeDraft($query)
    {
        return $query->where('status', 'draft');
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
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
                ->orWhere('description', 'like', "%{$term}%")
                ->orWhere('service_category', 'like', "%{$term}%")
                ->orWhere('service_type', 'like', "%{$term}%")
                ->orWhere('contact_person', 'like', "%{$term}%")
                ->orWhereHas('author', function ($author) use ($term) {
                    $author->where('name', 'like', "%{$term}%");
                });
        });
    }

    public function isPublished(): bool
    {
        return $this->status === 'published';
    }

    public function isFeatured(): bool
    {
        return (bool) $this->is_featured;
    }
}

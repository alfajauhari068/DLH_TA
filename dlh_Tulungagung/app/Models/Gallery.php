<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Traits\HasMedia;

class Gallery extends Model
{
    use HasMedia;

    use SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'cover_image',
        'status',
        'sort_order',
        'published_at',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'created_by'
    ];

    public function items()
    {
        return $this->hasMany(GalleryItem::class, 'gallery_id');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function getImageUrlAttribute()
    {
        return $this->cover_image ? asset('storage/' . $this->cover_image) : asset('images/default-gallery.jpg');
    }

    public function getAlbumNameAttribute()
    {
        return 'Kegiatan';
    }
}

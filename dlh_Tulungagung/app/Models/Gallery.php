<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'cover_image',
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
}

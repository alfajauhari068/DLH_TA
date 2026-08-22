<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory, \Illuminate\Database\Eloquent\SoftDeletes;

    protected $fillable = ['file_name', 'original_name', 'mime_type', 'size', 'disk', 'path', 'alt_text', 'caption', 'type'];
}

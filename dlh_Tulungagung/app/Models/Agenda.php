<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Traits\HasMedia;

class Agenda extends Model
{
    use HasFactory, \Illuminate\Database\Eloquent\SoftDeletes, HasMedia;

    protected $fillable = ['title', 'description', 'start_date', 'end_date', 'location', 'organizer', 'status', 'related_post_id'];
    
    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime'
    ];
}

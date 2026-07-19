<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Traits\HasMedia;

class Official extends Model
{
    use HasFactory, SoftDeletes, HasMedia;

    public $timestamps = false;
    protected $fillable = [
        'department_id',
        'position_id',
        'name',
        'position',
        'photo',
        'biography',
        'description',
        'email',
        'phone',
        'display_order',
        'status',
    ];

    public function positionRelation() { return $this->belongsTo(Position::class, 'position_id'); }
}

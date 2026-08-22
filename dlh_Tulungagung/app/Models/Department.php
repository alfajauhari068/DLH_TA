<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'parent_id',
    ];

    public function parent() { return $this->belongsTo(Department::class, 'parent_id'); }
    public function children() { return $this->hasMany(Department::class, 'parent_id'); }
    public function positions() { return $this->hasMany(Position::class); }
    public function officials() { return $this->hasMany(Official::class); }
}

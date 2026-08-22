<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $fillable = ['name', 'code', 'department_id', 'sort_order'];

    public function department() { return $this->belongsTo(Department::class); }
    public function officials() { return $this->hasMany(Official::class); }
}

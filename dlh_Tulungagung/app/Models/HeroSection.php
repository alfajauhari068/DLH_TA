<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    use HasFactory;

    /**
     * Nama tabel.
     */
    protected $table = 'hero_sections';

    /**
     * Field yang dapat diisi secara mass assignment.
     */
    protected $fillable = [
        'badge',
        'title',
        'subtitle',
        'image',
        'button_1_text',
        'button_1_url',
        'button_2_text',
        'button_2_url',
        'is_active',
        'sort_order',
    ];

    /**
     * Casting tipe data.
     */
    protected $casts = [
        'is_active' => 'boolean',
    ];
}

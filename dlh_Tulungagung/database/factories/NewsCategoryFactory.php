<?php

namespace Database\Factories;

use App\Models\NewsCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsCategoryFactory extends Factory
{
    protected $model = NewsCategory::class;

    public function definition(): array
    {
        return [
            'name' => fake()->randomElement(['Berita', 'Kegiatan', 'Pengumuman']),
            'slug' => fake()->unique()->slug(),
            'description' => fake()->sentence(),
        ];
    }
}

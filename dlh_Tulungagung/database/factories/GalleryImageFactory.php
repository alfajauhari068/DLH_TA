<?php

namespace Database\Factories;

use App\Models\Gallery;
use App\Models\GalleryImage;
use Illuminate\Database\Eloquent\Factories\Factory;

class GalleryImageFactory extends Factory
{
    protected $model = GalleryImage::class;

    public function definition(): array
    {
        return [
            'gallery_id' => Gallery::factory(),
            'image' => 'storage/gallery/' . fake()->slug() . '.jpg',
            'caption' => fake()->sentence(),
            'sort_order' => fake()->numberBetween(1, 20),
        ];
    }
}

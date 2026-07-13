<?php

namespace Database\Factories;

use App\Models\Publication;
use Illuminate\Database\Eloquent\Factories\Factory;

class PublicationFactory extends Factory
{
    protected $model = Publication::class;

    public function definition(): array
    {
        return [
            'category_id' => fake()->randomElement(['laporan', 'regulasi', 'kajian']),
            'title' => fake()->sentence(5),
            'description' => fake()->paragraph(),
            'cover' => 'storage/publications/' . fake()->slug() . '.jpg',
            'file' => fake()->slug() . '.pdf',
            'year' => fake()->year(),
            'downloads' => fake()->numberBetween(0, 1000),
            'status' => fake()->randomElement(['draft', 'published']),
        ];
    }
}

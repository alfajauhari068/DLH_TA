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
            'title' => fake()->sentence(5),
            'slug' => fake()->unique()->slug(),
            'summary' => fake()->paragraph(),
            'content' => fake()->paragraphs(3, true),
            'cover_file' => 'storage/publications/covers/' . fake()->slug() . '.jpg',
            'document_file' => 'storage/publications/documents/' . fake()->slug() . '.pdf',
            'category' => fake()->randomElement(['laporan', 'regulasi', 'kajian']),
            'status' => fake()->randomElement(['draft', 'published']),
            'published_at' => fake()->optional()->dateTimeBetween('-1 month', 'now'),
            'download_count' => fake()->numberBetween(0, 1000),
            'featured' => fake()->boolean(30),
            'sort_order' => fake()->numberBetween(0, 100),
        ];
    }
}

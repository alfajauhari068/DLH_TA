<?php

namespace Database\Factories;

use App\Models\News;
use App\Models\NewsCategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    protected $model = News::class;

    public function definition(): array
    {
        return [
            'category_id' => NewsCategory::factory(),
            'author_id' => User::factory(),
            'title' => fake()->sentence(6),
            'slug' => fake()->unique()->slug(),
            'summary' => fake()->paragraph(),
            'content' => fake()->paragraphs(3, true),
            'featured_image' => 'storage/news/' . fake()->slug() . '.jpg',
            'published_at' => fake()->dateTimeBetween('-2 months', 'now'),
            'status' => fake()->randomElement(['draft', 'published', 'archived']),
            'views' => fake()->numberBetween(0, 5000),
            'is_featured' => fake()->boolean(30),
            'seo_title' => fake()->sentence(),
            'seo_description' => fake()->sentence(),
            'seo_keywords' => fake()->words(5, true),
        ];
    }
}

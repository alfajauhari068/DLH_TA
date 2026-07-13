<?php

namespace Database\Factories;

use App\Models\Page;
use Illuminate\Database\Eloquent\Factories\Factory;

class PageFactory extends Factory
{
    protected $model = Page::class;

    public function definition(): array
    {
        return [
            'title' => fake()->sentence(4),
            'slug' => fake()->unique()->slug(),
            'content' => fake()->paragraphs(3, true),
            'banner' => 'storage/pages/' . fake()->slug() . '.jpg',
            'status' => fake()->randomElement(['draft', 'published']),
            'template' => fake()->randomElement(['default', 'fullwidth']),
            'seo_title' => fake()->sentence(),
            'seo_description' => fake()->sentence(),
        ];
    }
}

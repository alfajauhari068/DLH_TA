<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NewsFactory extends Factory
{
    protected $model = News::class;

    public function definition()
    {
        $title = $this->faker->sentence(6);
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'excerpt' => $this->faker->text(200),
            'content' => $this->faker->paragraphs(4, true),
            'thumbnail' => null,
            'status' => 1,
            'published_at' => now()->subDays(rand(0, 10)),
            'meta_title' => null,
            'meta_description' => null,
            'meta_keywords' => null,
            'created_by' => 1,
            'updated_by' => 1,
        ];
    }
}


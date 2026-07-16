<?php

namespace Database\Factories;

use App\Models\Program;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProgramFactory extends Factory
{
    protected $model = Program::class;

    public function definition(): array
    {
        return [
            'title' => fake()->sentence(4),
            'slug' => fake()->unique()->slug(),
            'excerpt' => fake()->paragraph(),
            'content' => fake()->paragraphs(3, true),
            'description' => fake()->paragraph(),
            'featured_image' => 'storage/programs/' . fake()->slug() . '.jpg',
            'thumbnail' => 'storage/programs/' . fake()->slug() . '.jpg',
            'start_date' => fake()->dateTimeBetween('-1 year', '+1 month')->format('Y-m-d'),
            'end_date' => fake()->dateTimeBetween('+1 month', '+1 year')->format('Y-m-d'),
            'status' => fake()->randomElement(['draft', 'published']),
            'published_at' => fake()->optional()->dateTimeBetween('-1 month', 'now'),
        ];
    }
}

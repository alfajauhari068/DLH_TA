<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    protected $model = Service::class;

    public function definition(): array
    {
        return [
            'title' => fake()->sentence(4),
            'icon' => fake()->randomElement(['leaf', 'recycle', 'water', 'tree']),
            'description' => fake()->paragraph(),
            'procedure' => fake()->paragraph(),
            'requirements' => fake()->sentence(),
            'service_hours' => fake()->randomElement(['08:00 - 15:00', '09:00 - 16:00']),
            'PPID' => fake()->slug(),
        ];
    }
}

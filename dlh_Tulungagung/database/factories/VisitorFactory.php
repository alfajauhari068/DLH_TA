<?php

namespace Database\Factories;

use App\Models\Visitor;
use Illuminate\Database\Eloquent\Factories\Factory;

class VisitorFactory extends Factory
{
    protected $model = Visitor::class;

    public function definition(): array
    {
        return [
            'ip_address' => fake()->ipv4(),
            'country' => fake()->country(),
            'city' => fake()->city(),
            'device' => fake()->randomElement(['Desktop', 'Mobile', 'Tablet']),
            'browser' => fake()->randomElement(['Chrome', 'Firefox', 'Safari']),
            'platform' => fake()->randomElement(['Windows', 'macOS', 'Linux', 'Android', 'iOS']),
            'visited_page' => '/' . fake()->slug(),
            'referrer' => fake()->optional()->url(),
            'visited_at' => fake()->dateTimeBetween('-1 week', 'now'),
        ];
    }
}

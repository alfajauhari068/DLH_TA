<?php

namespace Database\Factories;

use App\Models\VisitorLog;
use Illuminate\Database\Eloquent\Factories\Factory;

class VisitorLogFactory extends Factory
{
    protected $model = VisitorLog::class;

    public function definition(): array
    {
        return [
            'ip_address' => $this->faker->ipv4(),
            'country' => 'Indonesia',
            'city' => $this->faker->city(),
            'device' => $this->faker->randomElement(['desktop', 'mobile', 'tablet']),
            'browser' => $this->faker->randomElement(['Chrome', 'Firefox', 'Safari', 'Edge']),
            'platform' => $this->faker->randomElement(['Windows', 'macOS', 'Android', 'iOS']),
            'visited_page' => $this->faker->url(),
            'referrer' => $this->faker->url(),
            'visited_at' => $this->faker->dateTimeThisMonth(),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Complaint;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComplaintFactory extends Factory
{
    protected $model = Complaint::class;

    public function definition(): array
    {
        return [
            'ticket_number' => fake()->unique()->bothify('CMP-###'),
            'name' => fake()->name(),
            'email' => fake()->safeEmail(),
            'phone' => fake()->phoneNumber(),
            'location' => fake()->city(),
            'latitude' => fake()->latitude(),
            'longitude' => fake()->longitude(),
            'complaint' => fake()->paragraph(),
            'photo' => fake()->optional()->imageUrl(640, 480, 'nature'),
            'status' => fake()->randomElement(['open', 'in_progress', 'resolved']),
            'response' => fake()->optional()->paragraph(),
            'handled_by' => User::factory(),
        ];
    }
}

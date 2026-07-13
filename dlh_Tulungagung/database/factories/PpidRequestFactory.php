<?php

namespace Database\Factories;

use App\Models\PpidRequest;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PpidRequestFactory extends Factory
{
    protected $model = PpidRequest::class;

    public function definition(): array
    {
        return [
            'request_number' => fake()->unique()->bothify('PPID-###'),
            'name' => fake()->name(),
            'email' => fake()->safeEmail(),
            'phone' => fake()->phoneNumber(),
            'institution' => fake()->company(),
            'request_information' => fake()->paragraph(),
            'purpose' => fake()->sentence(),
            'status' => fake()->randomElement(['pending', 'processed', 'rejected']),
            'response' => fake()->optional()->sentence(),
            'attachment' => fake()->optional()->word() . '.pdf',
            'submitted_at' => fake()->dateTimeBetween('-1 month', 'now'),
            'processed_by' => User::factory(),
        ];
    }
}

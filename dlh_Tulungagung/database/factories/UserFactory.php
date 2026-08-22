<?php

namespace Database\Factories;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition(): array
    {
        return [
            'role_id' => Role::factory(),
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => bcrypt('password'),
            'avatar' => fake()->optional()->imageUrl(200, 200, 'people'),
            'phone' => fake()->phoneNumber(),
            'status' => fake()->boolean(80),
            'last_login' => fake()->optional()->dateTimeBetween('-1 month', 'now'),
            'remember_token' => Str::random(10),
        ];
    }
}

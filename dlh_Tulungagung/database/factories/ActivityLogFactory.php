<?php

namespace Database\Factories;

use App\Models\ActivityLog;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActivityLogFactory extends Factory
{
    protected $model = ActivityLog::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'action' => fake()->randomElement(['login', 'logout', 'create', 'update', 'delete', 'publish', 'download']),
            'module' => fake()->randomElement(['news', 'pages', 'programs', 'services', 'ppid']),
            'description' => fake()->sentence(),
            'ip_address' => fake()->ipv4(),
        ];
    }
}

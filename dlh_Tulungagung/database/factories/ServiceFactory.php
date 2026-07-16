<?php

namespace Database\Factories;

use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    protected $model = Service::class;

    public function definition(): array
    {
        return [
            'title' => fake()->sentence(4),
            'slug' => fake()->unique()->slug(),
            'summary' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'service_type' => fake()->randomElement(['Konsultasi', 'Permohonan', 'Pengaduan']),
            'service_category' => fake()->randomElement(['Perizinan', 'Limbah', 'Air', 'Tanaman']),
            'icon' => fake()->randomElement(['leaf', 'recycle', 'water', 'tree']),
            'requirements' => fake()->sentence(),
            'workflow' => fake()->sentence(),
            'estimated_time' => fake()->randomElement(['1 hari kerja', '3 hari kerja', '5 hari kerja']),
            'service_fee' => fake()->randomElement(['Gratis', 'Bebas biaya', 'Rp 0']),
            'contact_person' => fake()->name(),
            'contact_phone' => fake()->phoneNumber(),
            'contact_email' => fake()->safeEmail(),
            'office_location' => fake()->city(),
            'office_hours' => '08:00 - 15:00',
            'status' => fake()->randomElement(['draft', 'published']),
            'is_featured' => fake()->boolean(),
            'sort_order' => fake()->numberBetween(1, 20),
            'published_at' => now(),
            'created_by' => User::factory(),
            'updated_by' => User::factory(),
        ];
    }
}

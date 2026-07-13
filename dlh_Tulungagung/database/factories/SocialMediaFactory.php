<?php

namespace Database\Factories;

use App\Models\SocialMedia;
use Illuminate\Database\Eloquent\Factories\Factory;

class SocialMediaFactory extends Factory
{
    protected $model = SocialMedia::class;

    public function definition(): array
    {
        return [
            'platform' => fake()->randomElement(['Facebook', 'Instagram', 'YouTube', 'TikTok', 'Twitter/X']),
            'url' => fake()->url(),
            'icon' => fake()->randomElement(['facebook', 'instagram', 'youtube', 'tiktok', 'twitter']),
            'display_order' => fake()->numberBetween(1, 10),
        ];
    }
}

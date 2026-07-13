<?php

namespace Database\Factories;

use App\Models\Menu;
use App\Models\MenuItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class MenuItemFactory extends Factory
{
    protected $model = MenuItem::class;

    public function definition(): array
    {
        return [
            'menu_id' => Menu::factory(),
            'parent_id' => null,
            'title' => fake()->words(2, true),
            'url' => fake()->url(),
            'icon' => fake()->optional()->word(),
            'order' => fake()->numberBetween(1, 20),
            'target' => '_self',
        ];
    }
}

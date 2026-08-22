<?php

namespace Database\Factories;

use App\Models\Program;
use App\Models\ProgramImage;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProgramImageFactory extends Factory
{
    protected $model = ProgramImage::class;

    public function definition(): array
    {
        return [
            'program_id' => Program::factory(),
            'image' => 'storage/programs/' . fake()->slug() . '.jpg',
            'caption' => fake()->sentence(),
        ];
    }
}

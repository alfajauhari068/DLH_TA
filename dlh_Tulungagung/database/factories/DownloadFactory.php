<?php

namespace Database\Factories;

use App\Models\Download;
use Illuminate\Database\Eloquent\Factories\Factory;

class DownloadFactory extends Factory
{
    protected $model = Download::class;

    public function definition(): array
    {
        return [
            'title' => fake()->sentence(4),
            'file' => fake()->slug() . '.pdf',
            'category' => fake()->randomElement(['Formulir', 'Panduan', 'Template', 'Dokumen']),
            'downloads' => fake()->numberBetween(0, 2000),
        ];
    }
}

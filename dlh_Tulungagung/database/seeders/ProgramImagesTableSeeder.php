<?php

namespace Database\Seeders;

use App\Models\Program;
use App\Models\ProgramImage;
use Illuminate\Database\Seeder;

class ProgramImagesTableSeeder extends Seeder
{
    public function run(): void
    {
        $program = Program::where('slug', 'program-penanaman-pohon')->first();

        if (! $program) {
            return;
        }

        ProgramImage::unguarded(function () use ($program) {
            ProgramImage::firstOrCreate(
                ['program_id' => $program->id, 'image' => 'program-1.jpg'],
                [
                    'program_id' => $program->id,
                    'image' => 'program-1.jpg',
                    'caption' => 'Foto dokumentasi program penanaman pohon.',
                ]
            );
        });
    }
}

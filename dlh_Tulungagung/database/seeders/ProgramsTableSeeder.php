<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Seeder;

class ProgramsTableSeeder extends Seeder
{
    public function run(): void
    {
        Program::unguarded(function () {
            Program::firstOrCreate(
                ['slug' => 'program-penanaman-pohon'],
                [
                    'title' => 'Program Penanaman Pohon',
                    'slug' => 'program-penanaman-pohon',
                    'description' => 'Program penanaman pohon di wilayah perkotaan.',
                    'content' => 'Program lingkungan untuk meningkatkan ruang hijau.',
                    'thumbnail' => null,
                    'start_date' => now()->subMonth()->toDateString(),
                    'end_date' => now()->addMonth()->toDateString(),
                    'status' => 'active',
                ]
            );
        });
    }
}

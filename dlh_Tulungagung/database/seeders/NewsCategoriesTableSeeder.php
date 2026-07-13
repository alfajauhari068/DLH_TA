<?php

namespace Database\Seeders;

use App\Models\NewsCategory;
use Illuminate\Database\Seeder;

class NewsCategoriesTableSeeder extends Seeder
{
    public function run(): void
    {
        NewsCategory::unguarded(function () {
            NewsCategory::firstOrCreate(
                ['slug' => 'berita'],
                ['name' => 'Berita', 'description' => 'Berita resmi dan kegiatan dinas.']
            );

            NewsCategory::firstOrCreate(
                ['slug' => 'kegiatan'],
                ['name' => 'Kegiatan', 'description' => 'Informasi kegiatan lingkungan.']
            );

            NewsCategory::firstOrCreate(
                ['slug' => 'pengumuman'],
                ['name' => 'Pengumuman', 'description' => 'Pengumuman penting instansi.']
            );
        });
    }
}

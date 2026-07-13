<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    public function run(): void
    {
        Page::unguarded(function () {
            Page::firstOrCreate(
                ['slug' => 'tentang-dlh'],
                [
                    'title' => 'Tentang DLH',
                    'slug' => 'tentang-dlh',
                    'content' => 'Halaman profil instansi lingkungan hidup.',
                    'banner' => null,
                    'status' => 'published',
                    'template' => 'default',
                    'seo_title' => 'Tentang DLH',
                    'seo_description' => 'Profil instansi lingkungan hidup Kabupaten Tulungagung.',
                ]
            );
        });
    }
}

<?php

namespace Database\Seeders;

use App\Models\Download;
use Illuminate\Database\Seeder;

class DownloadsTableSeeder extends Seeder
{
    public function run(): void
    {
        Download::unguarded(function () {
            Download::firstOrCreate(
                ['title' => 'Panduan Aplikasi'],
                [
                    'title' => 'Panduan Aplikasi',
                    'file' => 'panduan-aplikasi.pdf',
                    'category' => 'Formulir',
                    'downloads' => 0,
                ]
            );
        });
    }
}

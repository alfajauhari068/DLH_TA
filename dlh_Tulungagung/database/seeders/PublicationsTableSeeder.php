<?php

namespace Database\Seeders;

use App\Models\Publication;
use Illuminate\Database\Seeder;

class PublicationsTableSeeder extends Seeder
{
    public function run(): void
    {
        Publication::unguarded(function () {
            Publication::firstOrCreate(
                ['title' => 'Laporan Tahunan Lingkungan'],
                [
                    'category_id' => 'laporan',
                    'title' => 'Laporan Tahunan Lingkungan',
                    'description' => 'Dokumen publikasi tahunan dinas lingkungan.',
                    'cover' => null,
                    'file' => 'laporan-tahunan.pdf',
                    'year' => 2026,
                    'downloads' => 0,
                    'status' => 'published',
                ]
            );
        });
    }
}

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
                    'title' => 'Laporan Tahunan Lingkungan',
                    'slug' => 'laporan-tahunan-lingkungan',
                    'summary' => 'Dokumen publikasi tahunan dinas lingkungan.',
                    'content' => 'Dokumen publikasi tahunan dinas lingkungan.',
                    'cover_file' => null,
                    'document_file' => 'laporan-tahunan.pdf',
                    'category' => 'laporan',
                    'status' => 'published',
                    'published_at' => now(),
                    'download_count' => 0,
                    'featured' => true,
                    'sort_order' => 1,
                ]
            );
        });
    }
}

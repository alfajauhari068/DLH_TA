<?php

namespace Database\Seeders;

use App\Models\Gallery;
use App\Models\GalleryImage;
use Illuminate\Database\Seeder;

class GalleryItemsTableSeeder extends Seeder
{
    public function run(): void
    {
        $gallery = Gallery::where('title', 'Kegiatan Lingkungan')->first();

        if (! $gallery) {
            return;
        }

        GalleryImage::unguarded(function () use ($gallery) {
            GalleryImage::firstOrCreate(
                ['gallery_id' => $gallery->id, 'image' => 'sample-1.jpg'],
                [
                    'gallery_id' => $gallery->id,
                    'image' => 'sample-1.jpg',
                    'caption' => 'Dokumentasi kegiatan lingkungan.',
                    'sort_order' => 1,
                ]
            );
        });
    }
}

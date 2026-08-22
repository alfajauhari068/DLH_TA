<?php

namespace Database\Seeders;

use App\Models\Gallery;
use App\Models\GalleryItem;
use Illuminate\Database\Seeder;

class GalleryItemsTableSeeder extends Seeder
{
    public function run(): void
    {
        $gallery = Gallery::where('title', 'Kegiatan Lingkungan')->first();

        if (! $gallery) {
            return;
        }

        GalleryItem::unguarded(function () use ($gallery) {
            GalleryItem::firstOrCreate(
                ['gallery_id' => $gallery->id, 'image' => 'sample-1.jpg'],
                [
                    'gallery_id' => $gallery->id,
                    'image' => 'sample-1.jpg',
                    'caption' => 'Kegiatan penanaman pohon.',
                    'sort_order' => 1,
                ]
            );

            GalleryItem::firstOrCreate(
                ['gallery_id' => $gallery->id, 'image' => 'sample-2.jpg'],
                [
                    'gallery_id' => $gallery->id,
                    'image' => 'sample-2.jpg',
                    'caption' => 'Pembersihan sungai.',
                    'sort_order' => 2,
                ]
            );
        });
    }
}

<?php

namespace Database\Seeders;

use App\Models\Gallery;
use App\Models\User;
use Illuminate\Database\Seeder;

class GalleriesTableSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::where('email', 'admin@example.com')->first();

        if (! $user) {
            return;
        }

        Gallery::unguarded(function () use ($user) {
            Gallery::firstOrCreate(
                ['title' => 'Kegiatan Lingkungan'],
                [
                    'title' => 'Kegiatan Lingkungan',
                    'description' => 'Album dokumentasi kegiatan lingkungan.',
                    'cover_image' => null,
                    'created_by' => $user->id,
                ]
            );
        });
    }
}

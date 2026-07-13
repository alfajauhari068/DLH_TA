<?php

namespace Database\Seeders;

use App\Models\SocialMedia;
use Illuminate\Database\Seeder;

class SocialMediaTableSeeder extends Seeder
{
    public function run(): void
    {
        SocialMedia::unguarded(function () {
            SocialMedia::firstOrCreate(
                ['platform' => 'Facebook'],
                ['url' => 'https://facebook.com/dlh', 'icon' => 'facebook', 'display_order' => 1]
            );

            SocialMedia::firstOrCreate(
                ['platform' => 'Instagram'],
                ['url' => 'https://instagram.com/dlh', 'icon' => 'instagram', 'display_order' => 2]
            );

            SocialMedia::firstOrCreate(
                ['platform' => 'YouTube'],
                ['url' => 'https://youtube.com/dlh', 'icon' => 'youtube', 'display_order' => 3]
            );
        });
    }
}

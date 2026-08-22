<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    public function run(): void
    {
        Setting::unguarded(function () {
            if (Setting::count() === 0) {
                $settings = [
                    ['key' => 'site_name', 'value' => 'DLH Tulungagung'],
                    ['key' => 'site_description', 'value' => 'Dinas Lingkungan Hidup Kabupaten Tulungagung'],
                    ['key' => 'address', 'value' => 'Jl. Pahlawan No. 1, Tulungagung'],
                    ['key' => 'phone', 'value' => '(0355) 123456'],
                    ['key' => 'email', 'value' => 'dlh@tulungagung.go.id'],
                    ['key' => 'facebook', 'value' => 'https://facebook.com/dlhtulungagung'],
                    ['key' => 'instagram', 'value' => 'https://instagram.com/dlhtulungagung'],
                    ['key' => 'copyright', 'value' => 'Dinas Lingkungan Hidup Kabupaten Tulungagung'],
                ];
                
                foreach ($settings as $setting) {
                    Setting::create($setting);
                }
            }
        });
    }
}

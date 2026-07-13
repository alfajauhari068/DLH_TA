<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    public function run(): void
    {
        Setting::unguarded(function () {
            Setting::firstOrCreate(
                ['key' => 'site_name'],
                ['value' => 'DLH Tulungagung']
            );

            Setting::firstOrCreate(
                ['key' => 'address'],
                ['value' => 'Jl. Raya Tulungagung']
            );

            Setting::firstOrCreate(
                ['key' => 'phone'],
                ['value' => '(0355) 123456']
            );

            Setting::firstOrCreate(
                ['key' => 'email'],
                ['value' => 'dlh@example.com']
            );

            Setting::firstOrCreate(
                ['key' => 'office_hours'],
                ['value' => '08:00 - 16:00']
            );
        });
    }
}

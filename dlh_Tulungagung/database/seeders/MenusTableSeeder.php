<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    public function run(): void
    {
        Menu::unguarded(function () {
            Menu::firstOrCreate(
                ['name' => 'Main Menu'],
                ['name' => 'Main Menu']
            );

            Menu::firstOrCreate(
                ['name' => 'Footer Menu'],
                ['name' => 'Footer Menu']
            );
        });
    }
}

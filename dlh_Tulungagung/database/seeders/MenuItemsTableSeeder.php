<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\MenuItem;
use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{
    public function run(): void
    {
        $mainMenu = Menu::where('name', 'Main Menu')->first();

        if (! $mainMenu) {
            return;
        }

        MenuItem::unguarded(function () use ($mainMenu) {
            MenuItem::firstOrCreate(
                ['menu_id' => $mainMenu->id, 'title' => 'Beranda'],
                [
                    'menu_id' => $mainMenu->id,
                    'parent_id' => null,
                    'title' => 'Beranda',
                    'url' => '/',
                    'icon' => null,
                    'order' => 1,
                    'target' => '_self',
                ]
            );

            MenuItem::firstOrCreate(
                ['menu_id' => $mainMenu->id, 'title' => 'Profil'],
                [
                    'menu_id' => $mainMenu->id,
                    'parent_id' => null,
                    'title' => 'Profil',
                    'url' => '/profil',
                    'icon' => null,
                    'order' => 2,
                    'target' => '_self',
                ]
            );
        });
    }
}

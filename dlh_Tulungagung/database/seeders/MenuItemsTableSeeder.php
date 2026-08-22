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

            MenuItem::firstOrCreate(
                ['menu_id' => $mainMenu->id, 'title' => 'Layanan'],
                [
                    'menu_id' => $mainMenu->id,
                    'parent_id' => null,
                    'title' => 'Layanan',
                    'url' => '/layanan',
                    'icon' => null,
                    'order' => 3,
                    'target' => '_self',
                ]
            );

            MenuItem::firstOrCreate(
                ['menu_id' => $mainMenu->id, 'title' => 'PPID'],
                [
                    'menu_id' => $mainMenu->id,
                    'parent_id' => null,
                    'title' => 'PPID',
                    'url' => '/ppid',
                    'icon' => null,
                    'order' => 4,
                    'target' => '_self',
                ]
            );

            MenuItem::firstOrCreate(
                ['menu_id' => $mainMenu->id, 'title' => 'Berita'],
                [
                    'menu_id' => $mainMenu->id,
                    'parent_id' => null,
                    'title' => 'Berita',
                    'url' => '/berita',
                    'icon' => null,
                    'order' => 5,
                    'target' => '_self',
                ]
            );

            MenuItem::firstOrCreate(
                ['menu_id' => $mainMenu->id, 'title' => 'Galeri'],
                [
                    'menu_id' => $mainMenu->id,
                    'parent_id' => null,
                    'title' => 'Galeri',
                    'url' => '/galeri',
                    'icon' => null,
                    'order' => 6,
                    'target' => '_self',
                ]
            );

            MenuItem::firstOrCreate(
                ['menu_id' => $mainMenu->id, 'title' => 'Dokumen'],
                [
                    'menu_id' => $mainMenu->id,
                    'parent_id' => null,
                    'title' => 'Dokumen',
                    'url' => '/dokumen',
                    'icon' => null,
                    'order' => 7,
                    'target' => '_self',
                ]
            );

            MenuItem::firstOrCreate(
                ['menu_id' => $mainMenu->id, 'title' => 'Kontak'],
                [
                    'menu_id' => $mainMenu->id,
                    'parent_id' => null,
                    'title' => 'Kontak',
                    'url' => '/kontak',
                    'icon' => null,
                    'order' => 8,
                    'target' => '_self',
                ]
            );
        });
    }
}

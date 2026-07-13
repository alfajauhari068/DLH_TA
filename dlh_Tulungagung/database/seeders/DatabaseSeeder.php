<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RolesTableSeeder::class,
            DepartmentsTableSeeder::class,
            UsersTableSeeder::class,
            OfficialsTableSeeder::class,
            NewsCategoriesTableSeeder::class,
            NewsTableSeeder::class,
            PagesTableSeeder::class,
            GalleriesTableSeeder::class,
            GalleryItemsTableSeeder::class,
            PublicationsTableSeeder::class,
            DownloadsTableSeeder::class,
            ProgramsTableSeeder::class,
            ProgramImagesTableSeeder::class,
            ServicesTableSeeder::class,
            PpidRequestsTableSeeder::class,
            ContactMessagesTableSeeder::class,
            ComplaintsTableSeeder::class,
            SettingsTableSeeder::class,
            SocialMediaTableSeeder::class,
            MenusTableSeeder::class,
            MenuItemsTableSeeder::class,
            VisitorLogsTableSeeder::class,
            ActivityLogsTableSeeder::class,
        ]);
    }
}

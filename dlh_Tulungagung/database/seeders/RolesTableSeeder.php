<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run(): void
    {
        Role::unguarded(function () {
            Role::firstOrCreate(
                ['name' => 'Administrator'],
                ['description' => 'Super administrator with full access.']
            );

            Role::firstOrCreate(
                ['name' => 'Operator'],
                ['description' => 'Operator managing content and services.']
            );

            Role::firstOrCreate(
                ['name' => 'Editor'],
                ['description' => 'Editor managing articles and pages.']
            );

            Role::firstOrCreate(
                ['name' => 'Guest'],
                ['description' => 'Limited access for public-facing users.']
            );
        });
    }
}

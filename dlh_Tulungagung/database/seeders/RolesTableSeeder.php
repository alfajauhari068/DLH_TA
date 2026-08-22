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
                ['name' => 'Guest'],
                ['description' => 'Limited access for public-facing users.']
            );
        });
    }
}

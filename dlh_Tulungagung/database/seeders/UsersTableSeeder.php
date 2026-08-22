<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run(): void
    {
        $adminRole = Role::where('name', 'Administrator')->value('id');

        User::unguarded(function () use ($adminRole) {
            User::firstOrCreate(
                ['email' => 'admin@example.com'],
                [
                    'name' => 'Administrator',
                    'role_id' => $adminRole,
                    'password' => Hash::make('password'),
                    'status' => true,
                    'phone' => '081234567890',
                    'last_login' => now(),
                ]
            );
        });
    }
}

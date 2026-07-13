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
        $operatorRole = Role::where('name', 'Operator')->value('id');
        $editorRole = Role::where('name', 'Editor')->value('id');

        User::unguarded(function () use ($adminRole, $operatorRole, $editorRole) {
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

            User::firstOrCreate(
                ['email' => 'operator@example.com'],
                [
                    'name' => 'Operator',
                    'role_id' => $operatorRole,
                    'password' => Hash::make('password'),
                    'status' => true,
                    'phone' => '081234567891',
                    'last_login' => now(),
                ]
            );

            User::firstOrCreate(
                ['email' => 'editor@example.com'],
                [
                    'name' => 'Editor',
                    'role_id' => $editorRole,
                    'password' => Hash::make('password'),
                    'status' => true,
                    'phone' => '081234567892',
                    'last_login' => now(),
                ]
            );
        });
    }
}

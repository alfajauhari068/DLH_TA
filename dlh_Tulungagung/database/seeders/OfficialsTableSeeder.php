<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Official;
use Illuminate\Database\Seeder;

class OfficialsTableSeeder extends Seeder
{
    public function run(): void
    {
        $department = Department::where('name', 'Sekretariat')->first();

        if (! $department) {
            return;
        }

        Official::unguarded(function () use ($department) {
            Official::firstOrCreate(
                ['email' => 'kepala-dinas@example.com'],
                [
                    'department_id' => $department->id,
                    'name' => 'Kepala Dinas',
                    'position' => 'Kepala Dinas',
                    'photo' => null,
                    'biography' => 'Pejabat kepala dinas lingkungan hidup.',
                    'email' => 'kepala-dinas@example.com',
                    'phone' => '081111111111',
                    'display_order' => 1,
                    'status' => 'active',
                ]
            );
        });
    }
}

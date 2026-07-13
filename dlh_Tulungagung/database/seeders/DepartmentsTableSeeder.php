<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    public function run(): void
    {
        Department::unguarded(function () {
            Department::firstOrCreate(
                ['name' => 'Sekretariat'],
                ['description' => 'Sekretariat organisasi.']
            );

            Department::firstOrCreate(
                ['name' => 'Bidang Perencanaan'],
                ['description' => 'Bidang yang menangani perencanaan program.']
            );

            Department::firstOrCreate(
                ['name' => 'Bidang Pengelolaan Sampah'],
                ['description' => 'Bidang yang menangani pengelolaan sampah.']
            );

            Department::firstOrCreate(
                ['name' => 'Bidang Pengendalian Lingkungan'],
                ['description' => 'Bidang yang menangani pengendalian lingkungan.']
            );

            Department::firstOrCreate(
                ['name' => 'Administrasi'],
                ['description' => 'Bagian administrasi dan tata usaha.']
            );

            Department::firstOrCreate(
                ['name' => 'Laboratorium'],
                ['description' => 'Unit laboratorium lingkungan.']
            );
        });
    }
}

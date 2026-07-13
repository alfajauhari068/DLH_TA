<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    public function run(): void
    {
        Service::unguarded(function () {
            Service::firstOrCreate(
                ['title' => 'Pelayanan Izin Lingkungan'],
                [
                    'title' => 'Pelayanan Izin Lingkungan',
                    'icon' => 'leaf',
                    'description' => 'Pelayanan izin lingkungan untuk instansi maupun masyarakat.',
                    'procedure' => 'Melengkapi dokumen persyaratan dan mengajukan permohonan.',
                    'requirements' => 'KTP, proposal kegiatan, dan dokumen penunjang.',
                    'service_hours' => '08:00 - 15:00',
                    'PPID' => 'ppid-lingkungan',
                ]
            );
        });
    }
}

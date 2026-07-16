<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::where('email', 'admin@example.com')->first();

        if (! $user) {
            return;
        }

        $services = [
            [
                'title' => 'Konsultasi Izin Lingkungan',
                'slug' => 'konsultasi-izin-lingkungan',
                'summary' => 'Pendampingan teknis untuk persiapan perizinan lingkungan.',
                'description' => 'Layanan konsultasi untuk membantu pemohon memahami persyaratan, proses, dan dokumen yang diperlukan dalam pengurusan izin lingkungan.',
                'service_type' => 'Konsultasi',
                'service_category' => 'Perizinan',
                'icon' => 'leaf',
                'requirements' => 'KTP, proposal kegiatan, dokumen pendukung, dan data lokasi.',
                'workflow' => 'Pendaftaran, verifikasi administrasi, konsultasi teknis, penetapan hasil.',
                'estimated_time' => '3 hari kerja',
                'service_fee' => 'Gratis',
                'contact_person' => 'Bidang Pengendalian Pencemaran',
                'contact_phone' => '0355-123456',
                'contact_email' => 'pengendalian@dlh.tulungagung.go.id',
                'office_location' => 'Kantor DLH Tulungagung',
                'office_hours' => '08.00 - 15.00',
                'status' => 'published',
                'is_featured' => true,
                'sort_order' => 1,
                'published_at' => now(),
                'created_by' => $user->id,
                'updated_by' => $user->id,
            ],
            [
                'title' => 'Layanan Pengelolaan Limbah',
                'slug' => 'layanan-pengelolaan-limbah',
                'summary' => 'Pengurusan layanan pengelolaan limbah padat dan cair.',
                'description' => 'Layanan ini membantu instansi dan pelaku usaha dalam menyiapkan dokumen dan tata cara pengelolaan limbah sesuai regulasi.',
                'service_type' => 'Permohonan',
                'service_category' => 'Limbah',
                'icon' => 'recycle',
                'requirements' => 'Surat permohonan, dokumen kapasitas pengolahan, dan data lokasi.',
                'workflow' => 'Pendaftaran, verifikasi, pemeriksaan data, penetapan tindak lanjut.',
                'estimated_time' => '5 hari kerja',
                'service_fee' => 'Bebas biaya',
                'contact_person' => 'Bidang Pengelolaan Limbah',
                'contact_phone' => '0355-654321',
                'contact_email' => 'limbah@dlh.tulungagung.go.id',
                'office_location' => 'Kantor DLH Tulungagung',
                'office_hours' => '08.00 - 15.00',
                'status' => 'published',
                'is_featured' => true,
                'sort_order' => 2,
                'published_at' => now(),
                'created_by' => $user->id,
                'updated_by' => $user->id,
            ],
            [
                'title' => 'Konsultasi Limbah B3',
                'slug' => 'konsultasi-limbah-b3',
                'summary' => 'Konsultasi teknis untuk pengelolaan limbah berbahaya dan beracun.',
                'description' => 'Memberikan bantuan teknis terkait identifikasi limbah B3, penanganan, dan pengangkutannya.',
                'service_type' => 'Konsultasi',
                'service_category' => 'Limbah B3',
                'icon' => 'fire',
                'requirements' => 'Data jenis limbah, volume, dan dokumen pelaku usaha.',
                'workflow' => 'Pendaftaran, analisis kebutuhan, konsultasi teknis, rekomendasi.',
                'estimated_time' => '2 hari kerja',
                'service_fee' => 'Gratis',
                'contact_person' => 'Tim Limbah B3',
                'contact_phone' => '0355-222222',
                'contact_email' => 'b3@dlh.tulungagung.go.id',
                'office_location' => 'Kantor DLH Tulungagung',
                'office_hours' => '08.00 - 15.00',
                'status' => 'draft',
                'is_featured' => false,
                'sort_order' => 3,
                'created_by' => $user->id,
                'updated_by' => $user->id,
            ],
        ];

        foreach ($services as $service) {
            Service::updateOrCreate(['slug' => $service['slug']], $service);
        }
    }
}

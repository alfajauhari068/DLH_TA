<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    public function run(): void
    {
        Page::unguarded(function () {
            Page::firstOrCreate(
                ['slug' => 'tentang-dlh'],
                [
                    'title' => 'Tentang DLH',
                    'slug' => 'tentang-dlh',
                    'content' => 'Halaman profil instansi lingkungan hidup.',
                    'banner' => null,
                    'status' => 'published',
                    'template' => 'default',
                    'seo_title' => 'Tentang DLH',
                    'seo_description' => 'Profil instansi lingkungan hidup Kabupaten Tulungagung.',
                ]
            );

            Page::firstOrCreate(
                ['slug' => 'tupoksi'],
                [
                    'title' => 'Tugas Pokok & Fungsi',
                    'slug' => 'tupoksi',
                    'content' => 'Informasi Tugas Pokok dan Fungsi DLH.',
                    'status' => 'published',
                    'template' => 'default',
                    'seo_title' => 'Tupoksi DLH',
                    'seo_description' => 'Tugas Pokok dan Fungsi DLH Kabupaten Tulungagung.',
                ]
            );

            Page::firstOrCreate(
                ['slug' => 'alur-pelayanan'],
                [
                    'title' => 'Alur Pelayanan',
                    'slug' => 'alur-pelayanan',
                    'content' => 'Informasi Alur Pelayanan Publik.',
                    'status' => 'published',
                    'template' => 'default',
                    'seo_title' => 'Alur Pelayanan Publik',
                    'seo_description' => 'Alur Pelayanan Publik DLH Kabupaten Tulungagung.',
                ]
            );

            Page::firstOrCreate(
                ['slug' => 'struktur-organisasi'],
                [
                    'title' => 'Struktur Organisasi',
                    'slug' => 'struktur-organisasi',
                    'content' => 'Struktur Organisasi Instansi.',
                    'status' => 'published',
                    'template' => 'default',
                    'seo_title' => 'Struktur Organisasi',
                    'seo_description' => 'Struktur Organisasi DLH Kabupaten Tulungagung.',
                ]
            );

            Page::firstOrCreate(
                ['slug' => 'maklumat-pelayanan'],
                [
                    'title' => 'Maklumat Pelayanan',
                    'slug' => 'maklumat-pelayanan',
                    'content' => 'Maklumat Pelayanan Instansi.',
                    'status' => 'published',
                    'template' => 'default',
                    'seo_title' => 'Maklumat Pelayanan',
                    'seo_description' => 'Maklumat Pelayanan DLH Kabupaten Tulungagung.',
                ]
            );

            Page::firstOrCreate(
                ['slug' => 'pelayanan-publik'],
                [
                    'title' => 'Pelayanan Publik',
                    'slug' => 'pelayanan-publik',
                    'content' => 'Layanan Publik Terpadu Instansi.',
                    'status' => 'published',
                    'template' => 'default',
                    'seo_title' => 'Pelayanan Publik',
                    'seo_description' => 'Layanan Publik DLH Kabupaten Tulungagung.',
                ]
            );

            Page::firstOrCreate(
                ['slug' => 'ppid'],
                [
                    'title' => 'Layanan PPID',
                    'slug' => 'ppid',
                    'content' => 'Layanan Informasi Publik (PPID).',
                    'status' => 'published',
                    'template' => 'default',
                    'seo_title' => 'PPID',
                    'seo_description' => 'PPID DLH Kabupaten Tulungagung.',
                ]
            );

            Page::firstOrCreate(
                ['slug' => 'kebijakan-privasi'],
                [
                    'title' => 'Kebijakan Privasi',
                    'slug' => 'kebijakan-privasi',
                    'content' => 'Kebijakan privasi website DLH Tulungagung.',
                    'status' => 'published',
                    'template' => 'default',
                    'seo_title' => 'Kebijakan Privasi',
                    'seo_description' => 'Kebijakan privasi DLH Kabupaten Tulungagung.',
                ]
            );

            Page::firstOrCreate(
                ['slug' => 'syarat-ketentuan'],
                [
                    'title' => 'Syarat & Ketentuan',
                    'slug' => 'syarat-ketentuan',
                    'content' => 'Syarat dan Ketentuan layanan website DLH Tulungagung.',
                    'status' => 'published',
                    'template' => 'default',
                    'seo_title' => 'Syarat & Ketentuan',
                    'seo_description' => 'Syarat dan Ketentuan layanan DLH Kabupaten Tulungagung.',
                ]
            );
        });
    }
}

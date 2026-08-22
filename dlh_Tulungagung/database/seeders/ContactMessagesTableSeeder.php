<?php

namespace Database\Seeders;

use App\Models\ContactMessage;
use Illuminate\Database\Seeder;

class ContactMessagesTableSeeder extends Seeder
{
    public function run(): void
    {
        ContactMessage::unguarded(function () {
            ContactMessage::firstOrCreate(
                ['subject' => 'Pertanyaan Informasi'],
                [
                    'name' => 'Siti Nurhaliza',
                    'email' => 'siti@example.com',
                    'phone' => '081298765432',
                    'subject' => 'Pertanyaan Informasi',
                    'message' => 'Saya ingin menanyakan prosedur layanan lingkungan.',
                    'status' => 'new',
                ]
            );
        });
    }
}

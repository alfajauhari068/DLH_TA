<?php

namespace Database\Seeders;

use App\Models\Complaint;
use App\Models\User;
use Illuminate\Database\Seeder;

class ComplaintsTableSeeder extends Seeder
{
    public function run(): void
    {
        $handler = User::where('email', 'operator@example.com')->first();

        if (! $handler) {
            return;
        }

        Complaint::unguarded(function () use ($handler) {
            Complaint::firstOrCreate(
                ['ticket_number' => 'CMP-001'],
                [
                    'ticket_number' => 'CMP-001',
                    'name' => 'Rina Wati',
                    'email' => 'rina@example.com',
                    'phone' => '081122334455',
                    'location' => 'Tulungagung',
                    'latitude' => '-8.0651',
                    'longitude' => '111.9027',
                    'complaint' => 'Laporan mengenai sampah menumpuk di dekat jalan utama.',
                    'photo' => null,
                    'status' => 'open',
                    'response' => null,
                    'handled_by' => $handler->id,
                ]
            );
        });
    }
}

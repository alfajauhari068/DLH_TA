<?php

namespace Database\Seeders;

use App\Models\PpidRequest;
use App\Models\User;
use Illuminate\Database\Seeder;

class PpidRequestsTableSeeder extends Seeder
{
    public function run(): void
    {
        $processor = User::where('email', 'admin@example.com')->first();

        if (! $processor) {
            return;
        }

        PpidRequest::unguarded(function () use ($processor) {
            PpidRequest::firstOrCreate(
                ['request_number' => 'PPID-001'],
                [
                    'request_number' => 'PPID-001',
                    'name' => 'Budi Santoso',
                    'email' => 'budi@example.com',
                    'phone' => '081234567800',
                    'institution' => 'Komunitas Lingkungan',
                    'request_information' => 'Permohonan salinan dokumen kebijakan lingkungan.',
                    'purpose' => 'Keperluan penelitian',
                    'status' => 'pending',
                    'response' => null,
                    'attachment' => null,
                    'submitted_at' => now(),
                    'processed_by' => $processor->id,
                ]
            );
        });
    }
}

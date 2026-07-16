<?php

namespace Database\Seeders;

use App\Models\VisitorLog;
use Illuminate\Database\Seeder;

class VisitorLogsTableSeeder extends Seeder
{
    public function run(): void
    {
        VisitorLog::unguarded(function () {
            VisitorLog::firstOrCreate(
                ['ip_address' => '127.0.0.1'],
                [
                    'ip_address' => '127.0.0.1',
                    'country' => 'Indonesia',
                    'city' => 'Tulungagung',
                    'device' => 'Desktop',
                    'browser' => 'Chrome',
                    'platform' => 'Windows',
                    'visited_page' => '/',
                    'referrer' => 'direct',
                    'visited_at' => now(),
                ]
            );
        });
    }
}

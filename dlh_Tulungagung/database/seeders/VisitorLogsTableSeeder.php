<?php

namespace Database\Seeders;

use App\Models\Visitor;
use Illuminate\Database\Seeder;

class VisitorLogsTableSeeder extends Seeder
{
    public function run(): void
    {
        Visitor::unguarded(function () {
            Visitor::firstOrCreate(
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

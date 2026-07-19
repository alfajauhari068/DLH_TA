<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$service = App\Models\Service::find(2);
if(!$service) {
    echo "Service not found.\n";
    exit;
}

$data = ['title' => 'Test Edit', 'status' => 'published'];
$serviceService = app(App\Services\ServiceService::class);
$serviceService->update($service, $data);

$service->refresh();
echo "Updated title: " . $service->title . "\n";

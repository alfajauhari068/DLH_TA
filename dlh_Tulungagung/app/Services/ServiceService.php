<?php

namespace App\Services;

use App\Models\Service;
use Illuminate\Pagination\LengthAwarePaginator;

class ServiceService
{
    public function paginate(int $perPage = 15): LengthAwarePaginator
    {
        return Service::query()->latest()->paginate($perPage);
    }

    public function create(array $data): Service
    {
        return Service::create($data);
    }

    public function update(Service $service, array $data): Service
    {
        $service->fill($data);
        $service->save();

        return $service;
    }

    public function delete(Service $service): bool
    {
        return $service->delete();
    }
}

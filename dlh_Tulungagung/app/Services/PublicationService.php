<?php

namespace App\Services;

use App\Models\Publication;
use Illuminate\Pagination\LengthAwarePaginator;

class PublicationService
{
    public function paginate(int $perPage = 15): LengthAwarePaginator
    {
        return Publication::query()->latest()->paginate($perPage);
    }

    public function create(array $data): Publication
    {
        return Publication::create($data);
    }

    public function update(Publication $publication, array $data): Publication
    {
        $publication->fill($data);
        $publication->save();

        return $publication;
    }

    public function delete(Publication $publication): bool
    {
        return $publication->delete();
    }
}

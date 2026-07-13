<?php

namespace App\Services;

use App\Models\PpidDocument;
use Illuminate\Pagination\LengthAwarePaginator;

class PpidService
{
    public function paginate(int $perPage = 15): LengthAwarePaginator
    {
        return PpidDocument::query()->latest()->paginate($perPage);
    }

    public function create(array $data): PpidDocument
    {
        return PpidDocument::create($data);
    }

    public function update(PpidDocument $ppidDocument, array $data): PpidDocument
    {
        $ppidDocument->fill($data);
        $ppidDocument->save();

        return $ppidDocument;
    }

    public function delete(PpidDocument $ppidDocument): bool
    {
        return $ppidDocument->delete();
    }
}

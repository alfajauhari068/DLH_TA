<?php

namespace App\Services;

use App\Models\Gallery;
use Illuminate\Pagination\LengthAwarePaginator;

class GalleryService
{
    public function paginate(int $perPage = 15): LengthAwarePaginator
    {
        return Gallery::query()->latest()->paginate($perPage);
    }

    public function create(array $data): Gallery
    {
        return Gallery::create($data);
    }

    public function update(Gallery $gallery, array $data): Gallery
    {
        $gallery->fill($data);
        $gallery->save();

        return $gallery;
    }

    public function delete(Gallery $gallery): bool
    {
        return $gallery->delete();
    }
}

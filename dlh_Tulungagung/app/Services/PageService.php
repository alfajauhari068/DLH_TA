<?php

namespace App\Services;

use App\Models\Page;
use Illuminate\Pagination\LengthAwarePaginator;

class PageService
{
    public function paginate(int $perPage = 15): LengthAwarePaginator
    {
        return Page::query()->latest()->paginate($perPage);
    }

    public function create(array $data): Page
    {
        return Page::create($data);
    }

    public function update(Page $page, array $data): Page
    {
        $page->fill($data);
        $page->save();

        return $page;
    }

    public function delete(Page $page): bool
    {
        return $page->delete();
    }
}

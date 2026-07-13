<?php

namespace App\Services;

use App\Models\News;
use Illuminate\Pagination\LengthAwarePaginator;

class NewsService
{
    public function paginate(int $perPage = 15): LengthAwarePaginator
    {
        return News::query()->latest()->paginate($perPage);
    }

    public function create(array $data): News
    {
        return News::create($data);
    }

    public function update(News $news, array $data): News
    {
        $news->fill($data);
        $news->save();

        return $news;
    }

    public function delete(News $news): bool
    {
        return $news->delete();
    }
}

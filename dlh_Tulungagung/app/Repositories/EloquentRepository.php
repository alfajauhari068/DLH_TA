<?php

namespace App\Repositories;

use App\Contracts\CrudRepositoryInterface;

abstract class EloquentRepository implements CrudRepositoryInterface
{
    protected $modelClass;

    public function __construct(string $modelClass)
    {
        $this->modelClass = $modelClass;
    }

    public function paginate(array $params = [])
    {
        $perPage = $params['per_page'] ?? config('cms.pagination.default', 15);
        return ($this->modelClass)::paginate($perPage);
    }

    public function find($id)
    {
        return ($this->modelClass)::findOrFail($id);
    }

    public function create(array $data)
    {
        return ($this->modelClass)::create($data);
    }

    public function update($model, array $data)
    {
        $model->fill($data);
        $model->save();
        return $model;
    }

    public function delete($model)
    {
        return $model->delete();
    }
}

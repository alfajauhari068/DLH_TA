<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudService
{
    protected $modelClass;

    public function __construct(string $modelClass = null)
    {
        $this->modelClass = $modelClass;
    }

    public static function applyListQuery(Builder $query, Request $request): Builder
    {
        return CrudQuery::apply($query, $request);
    }

    public function paginate(Request|int|null $requestOrPerPage = null, int $defaultPerPage = null)
    {
        $defaultPerPage = $defaultPerPage ?? config('cms.pagination.default', 15);
        
        if ($requestOrPerPage instanceof Request) {
            $perPage = (int) $requestOrPerPage->query('per_page', $defaultPerPage);
            $query = ($this->modelClass)::query();
            $query = static::applyListQuery($query, $requestOrPerPage);
            return $query->paginate($perPage)->withQueryString();
        }

        // It's an int
        $perPage = $requestOrPerPage ?? $defaultPerPage;
        $query = ($this->modelClass)::query();
        return $query->paginate($perPage)->withQueryString();
    }

    public function create(array $data)
    {
        return DB::transaction(function () use ($data) {
            $model = ($this->modelClass)::create($data);
            event(new \App\Events\CrudCreated($model));
            return $model;
        });
    }

    public function update($model, array $data)
    {
        return DB::transaction(function () use ($model, $data) {
            $model->fill($data);
            $model->save();
            event(new \App\Events\CrudUpdated($model));
            return $model;
        });
    }

    public function delete($model)
    {
        event(new \App\Events\CrudDeleting($model));
        $res = $model->delete();
        event(new \App\Events\CrudDeleted($model));
        return $res;
    }

    public function restore($model)
    {
        event(new \App\Events\CrudRestoring($model));
        $res = $model->restore();
        event(new \App\Events\CrudRestored($model));
        return $res;
    }

    public function forceDelete($model)
    {
        event(new \App\Events\CrudDeleting($model));
        $res = $model->forceDelete();
        event(new \App\Events\CrudDeleted($model));
        return $res;
    }

    public function trash(Request $request)
    {
        $perPage = (int) $request->query('per_page', config('cms.pagination.default', 15));
        $query = ($this->modelClass)::onlyTrashed();
        $query = CrudQuery::apply($query, $request);
        return $query->paginate($perPage)->withQueryString();
    }

    public function findTrashed($id)
    {
        return ($this->modelClass)::withTrashed()->findOrFail($id);
    }

    public function find($id)
    {
        return ($this->modelClass)::findOrFail($id);
    }
}

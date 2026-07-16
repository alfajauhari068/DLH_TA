<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class CrudQuery
{
    public static function apply(Builder $query, Request $request): Builder
    {
        $query = CrudFilter::apply($query, $request);

        if ($q = $request->query('q')) {
            $query->where(function ($sub) use ($q, $query) {
                $columns = ['title', 'slug', 'content', 'summary', 'description', 'service_category', 'service_type', 'contact_person'];
                $table = $query->getModel()->getTable();

                foreach ($columns as $index => $column) {
                    if (! Schema::hasColumn($table, $column)) {
                        continue;
                    }

                    if ($index === 0) {
                        $sub->where($column, 'like', "%{$q}%");
                    } else {
                        $sub->orWhere($column, 'like', "%{$q}%");
                    }
                }
            });
        }

        if ($status = $request->query('status')) {
            $query->where('status', $status);
        }

        if ($from = $request->query('from')) {
            $query->whereDate('created_at', '>=', $from);
        }
        if ($to = $request->query('to')) {
            $query->whereDate('created_at', '<=', $to);
        }

        $sort = $request->query('sort', 'created_at');
        $dir = $request->query('dir', 'desc');
        if (! in_array($dir, ['asc', 'desc'])) {
            $dir = 'desc';
        }

        $query->orderBy($sort, $dir);

        return $query;
    }
}

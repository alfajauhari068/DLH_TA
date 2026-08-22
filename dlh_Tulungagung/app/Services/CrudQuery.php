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

        $q = $request->query('search') ?: $request->query('q');
        if ($q) {
            $query->where(function ($sub) use ($q, $query) {
                $columns = ['title', 'name', 'slug', 'content', 'summary', 'description', 'service_category', 'service_type', 'contact_person'];
                $table = $query->getModel()->getTable();
                
                $first = true;
                foreach ($columns as $column) {
                    if (! Schema::hasColumn($table, $column)) {
                        continue;
                    }

                    if ($first) {
                        $sub->where($column, 'like', "%{$q}%");
                        $first = false;
                    } else {
                        $sub->orWhere($column, 'like', "%{$q}%");
                    }
                }
            });
        }

        if ($category = $request->query('category')) {
            $table = $query->getModel()->getTable();
            if (Schema::hasColumn($table, 'category_id')) {
                $query->where('category_id', $category);
            } elseif (Schema::hasColumn($table, 'category')) {
                $query->where('category', $category);
            }
        }

        if ($status = $request->query('status')) {
            if ($status !== 'all' && $status !== '') {
                $query->where('status', $status);
            }
        }

        if ($date = $request->query('date')) {
            // Check if it's a date range "YYYY-MM-DD to YYYY-MM-DD"
            if (str_contains($date, ' to ')) {
                $dates = explode(' to ', $date);
                if (count($dates) == 2) {
                    $query->whereDate('created_at', '>=', trim($dates[0]))
                          ->whereDate('created_at', '<=', trim($dates[1]));
                }
            } else {
                $query->whereDate('created_at', $date);
            }
        } else {
            if ($from = $request->query('from')) {
                $query->whereDate('created_at', '>=', $from);
            }
            if ($to = $request->query('to')) {
                $query->whereDate('created_at', '<=', $to);
            }
        }

        $sort = $request->query('sort', 'created_at');
        $dir = $request->query('dir', 'desc');
        
        // Handle unified sort parameters
        if ($sort === 'newest') {
            $sort = 'created_at';
            $dir = 'desc';
        } elseif ($sort === 'oldest') {
            $sort = 'created_at';
            $dir = 'asc';
        } elseif ($sort === 'a-z') {
            $sort = 'title'; // default string column
            $dir = 'asc';
        } elseif ($sort === 'z-a') {
            $sort = 'title';
            $dir = 'desc';
        }

        if (! in_array($dir, ['asc', 'desc'])) {
            $dir = 'desc';
        }

        $table = $query->getModel()->getTable();
        
        // Fallback for title if table uses 'name' instead
        if ($sort === 'title' && !Schema::hasColumn($table, 'title') && Schema::hasColumn($table, 'name')) {
            $sort = 'name';
        }

        if (Schema::hasColumn($table, $sort)) {
            $query->orderBy($sort, $dir);
        } else {
            $query->orderBy('id', $dir);
        }

        return $query;
    }
}

<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class CrudFilter
{
    public static function apply(Builder $query, Request $request): Builder
    {
        $table = $query->getModel()->getTable();

        if ($status = $request->query('status')) {
            $query->where('status', $status);
        }

        if ($category = $request->query('category')) {
            if (Schema::hasColumn($table, 'service_category')) {
                $query->where('service_category', $category);
            }
        }

        if ($type = $request->query('type')) {
            if (Schema::hasColumn($table, 'service_type')) {
                $query->where('service_type', $type);
            }
        }

        if ($featured = $request->query('featured')) {
            if (Schema::hasColumn($table, 'is_featured')) {
                $query->where('is_featured', filter_var($featured, FILTER_VALIDATE_BOOLEAN));
            }
        }

        if ($publishedAt = $request->query('published_at')) {
            if (Schema::hasColumn($table, 'published_at')) {
                $query->whereDate('published_at', $publishedAt);
            }
        }

        if ($author = $request->query('author')) {
            $query->where('created_by', $author);
        }

        if ($createdFrom = $request->query('created_from')) {
            $query->whereDate('created_at', '>=', $createdFrom);
        }

        if ($createdTo = $request->query('created_to')) {
            $query->whereDate('created_at', '<=', $createdTo);
        }

        if ($updatedFrom = $request->query('updated_from')) {
            $query->whereDate('updated_at', '>=', $updatedFrom);
        }

        if ($updatedTo = $request->query('updated_to')) {
            $query->whereDate('updated_at', '<=', $updatedTo);
        }

        return $query;
    }
}

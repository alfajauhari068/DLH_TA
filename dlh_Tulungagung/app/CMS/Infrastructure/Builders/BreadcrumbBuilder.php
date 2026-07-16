<?php

namespace App\CMS\Infrastructure\Builders;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Routing\Route;

class BreadcrumbBuilder
{
    public function buildFromRoute(Route $route): Collection
    {
        $parts = collect();

        // always start with dashboard
        $parts->push(['title' => 'Dashboard', 'route' => 'dashboard']);

        // derive module from route name (e.g. admin.news.edit)
        $name = $route->getName() ?: '';
        $segments = explode('.', $name);

        if (count($segments) >= 2) {
            $module = ucfirst($segments[1]);
            $parts->push(['title' => Str::title($module), 'route' => $segments[0] . '.' . $segments[1] . '.index']);
        }

        // add action if present
        if (count($segments) >= 3) {
            $action = Str::title($segments[2]);
            $parts->push(['title' => $action, 'route' => null]);
        }

        event(new \App\Events\BreadcrumbBuilt($parts));

        return $parts;
    }
}

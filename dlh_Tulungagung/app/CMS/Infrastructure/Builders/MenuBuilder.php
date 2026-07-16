<?php

namespace App\CMS\Infrastructure\Builders;

use App\CMS\Infrastructure\Registry\ModuleRegistry;
use Illuminate\Support\Collection;

class MenuBuilder
{
    public function __construct(protected ModuleRegistry $modules)
    {
    }

    public function build(): Collection
    {
        $modules = $this->modules->all();

        // Group modules by 'group' and sort by order
        $grouped = $modules->groupBy('group')->map(function ($items) {
            return $items->sortBy('order')->values();
        });

        $menu = collect();

        foreach ($grouped as $group => $items) {
            $children = $items->map(function ($m) {
                return [
                    'title' => $m['name'],
                    'route' => $m['route'] ?? null,
                    'icon' => $m['icon'] ?? null,
                    'permission_prefix' => $m['permission_prefix'] ?? null,
                ];
            });

            $menu->push([ 'group' => $group, 'items' => $children ]);
        }

        event(new \App\Events\MenuBuilt($menu));

        return $menu;
    }
}

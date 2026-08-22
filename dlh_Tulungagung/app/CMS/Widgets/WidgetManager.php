<?php

namespace App\CMS\Widgets;

use Illuminate\Support\Collection;

class WidgetManager
{
    protected array $widgets = [];

    public function register(string $slug, callable $callback): void
    {
        $this->widgets[$slug] = $callback;
    }

    public function all(): Collection
    {
        $items = collect();
        foreach ($this->widgets as $slug => $callback) {
            $items->push(['slug' => $slug, 'data' => $callback()]);
        }

        return $items;
    }
}

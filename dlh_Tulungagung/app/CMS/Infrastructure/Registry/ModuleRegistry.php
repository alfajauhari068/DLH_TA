<?php

namespace App\CMS\Infrastructure\Registry;

use Illuminate\Support\Collection;

class ModuleRegistry
{
    protected Collection $modules;

    public function __construct()
    {
        $this->modules = collect(config('cms_modules.modules', []));
    }

    public function all(): Collection
    {
        return $this->modules->filter(fn($m) => ($m['enabled'] ?? true));
    }

    public function get(string $slug): ?array
    {
        return $this->modules->firstWhere('slug', $slug) ?: null;
    }

    public function register(array $module): void
    {
        // allow dynamic runtime registration
        $this->modules->push($module);
        event(new \App\Events\CmsModuleRegistered($module));
    }
}

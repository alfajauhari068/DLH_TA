<?php

namespace App\CMS;

use App\CMS\Discovery\ModuleDiscovery;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Collection;
use App\CMS\Manifest\ModuleManifest;
use App\CMS\Registry\RouteMetadataRegistry;

class CMSManager
{
    protected array $modules = [];

    public function __construct(protected ModuleDiscovery $discovery, protected RouteMetadataRegistry $routes)
    {
        $this->load();
    }

    public function load(bool $force = false): void
    {
        if ($force) {
            $this->modules = [];
            Cache::forget('cms.modules');
        }

        $this->modules = Cache::remember('cms.modules', 60, fn() => $this->discovery->discover());
    }

    /** @return ModuleManifest[] */
    public function modules(): array
    {
        return $this->modules;
    }

    public function getBySlug(string $slug): ?ModuleManifest
    {
        foreach ($this->modules as $m) {
            if (($m->slug ?? null) === $slug) {
                return $m;
            }
        }

        return null;
    }

    public function buildNavigation(callable $builder, bool $force = false)
    {
        $key = 'cms.navigation';
        if ($force) {
            Cache::forget($key);
        }

        return Cache::remember($key, 60, fn() => $builder());
    }

    public function validateRoutes(): array
    {
        // detect duplicates using route metadata registry
        return $this->routes->validate($this->modules());
    }
}

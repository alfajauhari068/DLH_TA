<?php

namespace App\CMS\Discovery;

use App\CMS\Manifest\ModuleManifest;

class ModuleDiscovery
{
    public function discover(): array
    {
        $modules = config('cms_modules.modules', []);

        // Normalize into manifests
        return array_map(fn($m) => new ModuleManifest($m), $modules);
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\CMS\Infrastructure\Registry\ModuleRegistry;
use App\CMS\Infrastructure\Builders\MenuBuilder;
use App\CMS\Infrastructure\ViewComposers\SidebarComposer;
use Illuminate\Support\Facades\View;

class CMSServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(ModuleRegistry::class, fn($app) => new ModuleRegistry());
        $this->app->bind(MenuBuilder::class, fn($app) => new MenuBuilder($app->make(ModuleRegistry::class)));
    }

    public function boot(): void
    {
        // Share modules config globally
        View::share('cmsModules', config('cms_modules.modules', []));

        // Register view composer for sidebar
        View::composer('components.admin.sidebar', SidebarComposer::class);

        // Fire module loaded event
        event(new \App\Events\NavigationLoaded());
    }
}

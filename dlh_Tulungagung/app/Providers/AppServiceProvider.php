<?php

namespace App\Providers;

use App\CMS\Widgets\DashboardWidgetBuilder;
use App\CMS\Widgets\WidgetManager;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Page;
use App\Models\Publication;
use App\Models\Service;
use App\Models\Setting;
use App\Models\User;
use App\Services\MediaService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(WidgetManager::class, function () {
            $manager = new WidgetManager();

            $manager->register('users', fn () => ['title' => 'Total Users', 'value' => User::count(), 'color' => 'primary']);
            $manager->register('news', fn () => ['title' => 'News Items', 'value' => News::count(), 'color' => 'info']);
            $manager->register('publications', fn () => ['title' => 'Publications', 'value' => Publication::count(), 'color' => 'success']);
            $manager->register('publications_published', fn () => ['title' => 'Published Publications', 'value' => Publication::query()->where('status', 'published')->count(), 'color' => 'success']);
            $manager->register('publications_draft', fn () => ['title' => 'Draft Publications', 'value' => Publication::query()->where('status', 'draft')->count(), 'color' => 'warning']);
            $manager->register('publications_recent', fn () => ['title' => 'Latest Publication', 'value' => Publication::query()->latest()->value('title') ?: 'None', 'color' => 'info']);
            $manager->register('galleries', fn () => ['title' => 'Gallery Items', 'value' => Gallery::count(), 'color' => 'warning']);
            $manager->register('pages', fn () => ['title' => 'Pages', 'value' => Page::count(), 'color' => 'secondary']);
            $manager->register('programs', fn () => ['title' => 'Programs', 'value' => \App\Models\Program::count(), 'color' => 'success']);
            $manager->register('services_total', fn () => ['title' => 'Services Total', 'value' => Service::count(), 'color' => 'primary']);
            $manager->register('services_published', fn () => ['title' => 'Services Published', 'value' => Service::query()->where('status', 'published')->count(), 'color' => 'success']);
            $manager->register('services_draft', fn () => ['title' => 'Services Draft', 'value' => Service::query()->where('status', 'draft')->count(), 'color' => 'warning']);
            $manager->register('services_featured', fn () => ['title' => 'Services Featured', 'value' => Service::query()->where('is_featured', true)->count(), 'color' => 'info']);
            $manager->register('services_latest', fn () => ['title' => 'Latest Service', 'value' => Service::query()->latest()->value('title') ?: 'None', 'color' => 'secondary']);
            $manager->register('settings', fn () => ['title' => 'Settings', 'value' => Setting::count(), 'color' => 'dark']);

            return $manager;
        });

        $this->app->singleton(DashboardWidgetBuilder::class, function ($app) {
            return new DashboardWidgetBuilder($app->make(WidgetManager::class));
        });

        $this->app->singleton(MediaService::class, function () {
            return new MediaService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        try {
            if (\Illuminate\Support\Facades\Schema::hasTable('settings')) {
                $globalSettings = \App\Models\Setting::pluck('value', 'key')->toArray();
                \Illuminate\Support\Facades\View::share('globalSettings', $globalSettings);
            }

            if (\Illuminate\Support\Facades\Schema::hasTable('social_media')) {
                $socialMedia = \App\Models\SocialMedia::orderBy('display_order')->get();
                \Illuminate\Support\Facades\View::share('globalSocialMedia', $socialMedia);
            }

            if (\Illuminate\Support\Facades\Schema::hasTable('menus') && \Illuminate\Support\Facades\Schema::hasTable('menu_items')) {
                $mainMenu = \App\Models\Menu::where('name', 'Main Menu')->first();
                $headerMenu = $mainMenu 
                    ? \App\Models\MenuItem::where('menu_id', $mainMenu->id)
                        ->whereNull('parent_id')
                        ->with('children')
                        ->orderBy('order')
                        ->get() 
                    : collect();
                \Illuminate\Support\Facades\View::share('globalHeaderMenu', $headerMenu);
            }
        } catch (\Exception $e) {
            // Ignore if DB is not ready during console commands
        }
    }
}

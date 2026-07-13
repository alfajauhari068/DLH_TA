<?php

namespace App\Providers;

use App\Models\Gallery;
use App\Models\News;
use App\Models\Page;
use App\Models\Program;
use App\Models\Publication;
use App\Models\PpidDocument;
use App\Models\Service;
use App\Models\Setting;
use App\Models\User;
use App\Policies\GalleryPolicy;
use App\Policies\NewsPolicy;
use App\Policies\PagePolicy;
use App\Policies\ProgramPolicy;
use App\Policies\PublicationPolicy;
use App\Policies\PpidDocumentPolicy;
use App\Policies\ServicePolicy;
use App\Policies\SettingPolicy;
use App\Policies\UserPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Gallery::class => GalleryPolicy::class,
        News::class => NewsPolicy::class,
        Page::class => PagePolicy::class,
        Program::class => ProgramPolicy::class,
        Publication::class => PublicationPolicy::class,
        PpidDocument::class => PpidDocumentPolicy::class,
        Service::class => ServicePolicy::class,
        Setting::class => SettingPolicy::class,
        User::class => UserPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Gate::define('access-dashboard', function ($user) {
            return $user->hasPermission('Dashboard.View');
        });
    }
}

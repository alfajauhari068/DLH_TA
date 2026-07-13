<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\News;
use App\Models\Page;
use App\Models\PpidDocument;
use App\Models\Program;
use App\Models\Publication;
use App\Models\Role;
use App\Models\Setting;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        Gate::authorize('access-dashboard', $request->user());

        $widgetCounts = [
            'users' => User::count(),
            'news' => News::count(),
            'publications' => Publication::count(),
            'galleries' => Gallery::count(),
            'programs' => Program::count(),
            'services' => Service::count(),
            'ppid' => PpidDocument::count(),
            'pages' => Page::count(),
            'settings' => Setting::count(),
        ];

        return view('dashboard', compact('widgetCounts'));
    }
}

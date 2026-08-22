<?php

namespace App\Http\Controllers;

use App\CMS\Widgets\DashboardWidgetBuilder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class DashboardController extends Controller
{
    public function __construct(protected DashboardWidgetBuilder $widgetBuilder)
    {
    }

    public function index(Request $request)
    {
        Gate::authorize('access-dashboard', $request->user());

        $widgets = $this->widgetBuilder->build();

        return view('dashboard', ['widgets' => $widgets]);
    }
}

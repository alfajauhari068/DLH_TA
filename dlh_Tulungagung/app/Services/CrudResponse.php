<?php

namespace App\Services;

use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

class CrudResponse
{
    public static function success(Redirector $redirector, string $route, string $message, array $params = []): RedirectResponse
    {
        return $redirector->route($route, $params)->with('success', $message);
    }

    public static function error(Redirector $redirector, string $route, string $message, array $params = []): RedirectResponse
    {
        return $redirector->route($route, $params)->with('error', $message);
    }
}

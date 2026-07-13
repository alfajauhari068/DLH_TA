<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsurePermission
{
    public function handle(Request $request, Closure $next, string ...$permissions): Response
    {
        $user = $request->user();

        if (! $user) {
            abort(403);
        }

        $requiredPermissions = collect($permissions)
            ->flatMap(fn (string $permission): array => explode(',', $permission))
            ->map(fn (string $permission): string => trim($permission))
            ->filter()
            ->all();

        if ($requiredPermissions === [] || ! $user->hasPermission($requiredPermissions)) {
            abort(403);
        }

        return $next($request);
    }
}

<?php

namespace App\CMS\Infrastructure\ViewComposers;

use App\CMS\Infrastructure\Builders\MenuBuilder;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class SidebarComposer
{
    public function __construct(protected MenuBuilder $builder)
    {
    }

    public function compose(View $view)
    {
        $menu = $this->builder->build();

        // Optionally filter by permissions
        $menu = $menu->map(function ($group) {
            $items = $group['items']->filter(function ($item) {
                if (empty($item['permission_prefix'])) {
                    return true;
                }
                // e.g. permission_prefix 'News' -> check 'News.View'
                $perm = $item['permission_prefix'] . '.View';
                return Auth::user() ? Auth::user()->hasPermission($perm) : false;
            })->values();

            return ['group' => $group['group'], 'items' => $items];
        })->filter(fn($g) => $g['items']->isNotEmpty())->values();

        $view->with('cmsNavigation', $menu);
    }
}

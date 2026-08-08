<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\MenuItem;
use Illuminate\View\View;

class MenuController extends Controller
{
    public function index(): View
    {
        $mainMenu = Menu::firstOrCreate([
            'name' => 'Main Menu',
        ]);

        $menuItems = MenuItem::where('menu_id', $mainMenu->id)
            ->whereNull('parent_id')
            ->with('children')
            ->orderBy('order')
            ->get();

        return view('admin.menus.index', compact('mainMenu', 'menuItems'));
    }
}

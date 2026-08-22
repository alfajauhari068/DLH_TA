<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\MenuItem;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MenuItemController extends Controller
{
    public function create(Request $request): View
    {
        $menu_id = $request->query('menu_id');
        $parent_id = $request->query('parent_id');
        
        $mainMenu = Menu::findOrFail($menu_id);
        $parentItem = $parent_id ? MenuItem::find($parent_id) : null;
        
        // Get potential parents (only top-level to prevent deep nesting)
        $parentOptions = MenuItem::where('menu_id', $menu_id)
            ->whereNull('parent_id')
            ->orderBy('order')
            ->get();

        // Get available URLs
        $standardUrls = [
            '/' => 'Beranda',
            '/profil' => 'Profil / Tentang Kami',
            '/layanan' => 'Layanan',
            '/ppid' => 'PPID',
            '/berita' => 'Berita',
            '/galeri' => 'Galeri',
            '/publikasi' => 'Publikasi',
            '/dokumen' => 'Dokumen (Unduhan Khusus)',
            '/kontak' => 'Kontak',
            '/agenda' => 'Agenda',
            '/skm' => 'SKM (Survei Kepuasan Masyarakat)',
            '/struktur-organisasi' => 'Struktur Organisasi',
        ];

        $pages = \App\Models\Page::select('title', 'slug')->get();
        $pageUrls = [];
        foreach ($pages as $page) {
            $pageUrls['/halaman/' . $page->slug] = 'Halaman: ' . $page->title;
        }

        $availableUrls = array_merge($standardUrls, $pageUrls);

        return view('admin.menus.items.create', compact('mainMenu', 'parentItem', 'parentOptions', 'availableUrls'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'menu_id' => 'required|exists:menus,id',
            'parent_id' => 'nullable|exists:menu_items,id',
            'title' => 'required|string|max:255',
            'url' => 'required|string|max:255',
            'icon' => 'nullable|string|max:255',
            'target' => 'nullable|string|in:_self,_blank',
            'order' => 'nullable|integer',
        ]);

        if (!isset($validated['target'])) {
            $validated['target'] = '_self';
        }
        
        if (!isset($validated['order'])) {
            $validated['order'] = MenuItem::where('menu_id', $validated['menu_id'])
                ->where('parent_id', $validated['parent_id'])
                ->max('order') + 1;
        }

        MenuItem::create($validated);

        return redirect()->route('admin.menus.index')->with('success', 'Item menu berhasil ditambahkan.');
    }

    public function edit(MenuItem $item): View
    {
        $mainMenu = Menu::findOrFail($item->menu_id);
        
        $parentOptions = MenuItem::where('menu_id', $item->menu_id)
            ->whereNull('parent_id')
            ->where('id', '!=', $item->id)
            ->orderBy('order')
            ->get();

        // Get available URLs
        $standardUrls = [
            '/' => 'Beranda',
            '/profil' => 'Profil / Tentang Kami',
            '/layanan' => 'Layanan',
            '/ppid' => 'PPID',
            '/berita' => 'Berita',
            '/galeri' => 'Galeri',
            '/publikasi' => 'Publikasi',
            '/dokumen' => 'Dokumen (Unduhan Khusus)',
            '/kontak' => 'Kontak',
            '/agenda' => 'Agenda',
            '/skm' => 'SKM (Survei Kepuasan Masyarakat)',
            '/struktur-organisasi' => 'Struktur Organisasi',
        ];

        $pages = \App\Models\Page::select('title', 'slug')->get();
        $pageUrls = [];
        foreach ($pages as $page) {
            $pageUrls['/halaman/' . $page->slug] = 'Halaman: ' . $page->title;
        }

        $availableUrls = array_merge($standardUrls, $pageUrls);

        return view('admin.menus.items.edit', compact('item', 'mainMenu', 'parentOptions', 'availableUrls'));
    }

    public function update(Request $request, MenuItem $item): RedirectResponse
    {
        $validated = $request->validate([
            'parent_id' => 'nullable|exists:menu_items,id',
            'title' => 'required|string|max:255',
            'url' => 'required|string|max:255',
            'icon' => 'nullable|string|max:255',
            'target' => 'nullable|string|in:_self,_blank',
            'order' => 'required|integer',
        ]);

        if (!isset($validated['target'])) {
            $validated['target'] = '_self';
        }

        $item->update($validated);

        return redirect()->route('admin.menus.index')->with('success', 'Item menu berhasil diperbarui.');
    }

    public function destroy(MenuItem $item): RedirectResponse
    {
        // Delete children first
        $item->children()->delete();
        $item->delete();

        return redirect()->route('admin.menus.index')->with('success', 'Item menu berhasil dihapus.');
    }
}

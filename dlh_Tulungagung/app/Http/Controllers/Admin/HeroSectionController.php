<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HeroSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroSectionController extends Controller
{
    /**
     * Menampilkan daftar Hero.
     */
    public function index()
    {
        $heroes = HeroSection::orderBy('sort_order')
            ->orderByDesc('created_at')
            ->paginate(10);

        return view('admin.hero.index', compact('heroes'));
    }

    /**
     * Form tambah Hero.
     */
    public function create()
    {
        return view('admin.hero.create');
    }

    /**
     * Simpan Hero baru.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'badge'          => 'nullable|string|max:255',
            'title'          => 'required|string|max:255',
            'subtitle'       => 'nullable|string',
            'image'          => 'required|image|mimes:jpg,jpeg,png,webp|max:4096',
            'button_1_text'  => 'nullable|string|max:100',
            'button_1_url'   => 'nullable|string|max:255',
            'button_2_text'  => 'nullable|string|max:100',
            'button_2_url'   => 'nullable|string|max:255',
            'is_active'      => 'nullable|boolean',
            'sort_order'     => 'nullable|integer|min:1',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request
                ->file('image')
                ->store('heroes', 'public');
        }

        $validated['is_active'] = $request->boolean('is_active');

        HeroSection::create($validated);

        return redirect()
            ->route('admin.hero.index')
            ->with('success', 'Hero berhasil ditambahkan.');
    }

    /**
     * Form edit Hero.
     */
    public function edit(HeroSection $hero)
    {
        return view('admin.hero.edit', compact('hero'));
    }

    /**
     * Update Hero.
     */
    public function update(Request $request, HeroSection $hero)
    {
        $validated = $request->validate([
            'badge'          => 'nullable|string|max:255',
            'title'          => 'required|string|max:255',
            'subtitle'       => 'nullable|string',
            'image'          => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'button_1_text'  => 'nullable|string|max:100',
            'button_1_url'   => 'nullable|string|max:255',
            'button_2_text'  => 'nullable|string|max:100',
            'button_2_url'   => 'nullable|string|max:255',
            'is_active'      => 'nullable|boolean',
            'sort_order'     => 'nullable|integer|min:1',
        ]);

        if ($request->hasFile('image')) {

            if ($hero->image && Storage::disk('public')->exists($hero->image)) {
                Storage::disk('public')->delete($hero->image);
            }

            $validated['image'] = $request
                ->file('image')
                ->store('heroes', 'public');
        }

        $validated['is_active'] = $request->boolean('is_active');

        $hero->update($validated);

        return redirect()
            ->route('admin.hero.index')
            ->with('success', 'Hero berhasil diperbarui.');
    }

    /**
     * Hapus Hero.
     */
    public function destroy(HeroSection $hero)
    {
        if ($hero->image && Storage::disk('public')->exists($hero->image)) {
            Storage::disk('public')->delete($hero->image);
        }

        $hero->delete();

        return redirect()
            ->route('admin.hero.index')
            ->with('success', 'Hero berhasil dihapus.');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreGalleryRequest;
use App\Http\Requests\Admin\UpdateGalleryRequest;
use App\Models\Gallery;
use App\Services\GalleryService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GalleryController extends Controller
{
    public function __construct(protected GalleryService $galleryService)
    {
    }

    public function index(Request $request): View
    {
        $this->authorize('viewAny', Gallery::class);

        $galleries = $this->galleryService->paginate($request->query('per_page', 15));

        return view('admin.galleries.index', compact('galleries'));
    }

    public function create(): View
    {
        $this->authorize('create', Gallery::class);

        return view('admin.galleries.create');
    }

    public function store(StoreGalleryRequest $request): RedirectResponse
    {
        $this->authorize('create', Gallery::class);

        $this->galleryService->create($request->validated());

        return redirect()->route('admin.galleries.index')->with('success', 'Gallery created successfully.');
    }

    public function show(Gallery $gallery): View
    {
        $this->authorize('view', $gallery);

        return view('admin.galleries.show', compact('gallery'));
    }

    public function edit(Gallery $gallery): View
    {
        $this->authorize('update', $gallery);

        return view('admin.galleries.edit', compact('gallery'));
    }

    public function update(UpdateGalleryRequest $request, Gallery $gallery): RedirectResponse
    {
        $this->authorize('update', $gallery);

        $this->galleryService->update($gallery, $request->validated());

        return redirect()->route('admin.galleries.index')->with('success', 'Gallery updated successfully.');
    }

    public function destroy(Gallery $gallery): RedirectResponse
    {
        $this->authorize('delete', $gallery);

        $this->galleryService->delete($gallery);

        return redirect()->route('admin.galleries.index')->with('success', 'Gallery deleted successfully.');
    }
}

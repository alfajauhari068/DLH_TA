<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\StoreGalleryRequest;
use App\Http\Requests\Admin\UpdateGalleryRequest;
use App\Models\Gallery;
use App\Models\GalleryItem;
use App\Services\GalleryService;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Storage;

class GalleryController extends BaseCrudController
{
    protected $service;

    protected array $searchFields = ['title', 'slug', 'description', 'status'];
    protected array $filterFields = ['status', 'published', 'draft', 'archived', 'from', 'to', 'author'];
    protected array $sortableFields = ['title', 'created_at', 'updated_at', 'published_at', 'sort_order', 'status'];

    public function __construct(GalleryService $service)
    {
        $this->service = $service;
    }

    public function store(Request $request, Redirector $redirect)
    {
        $data = method_exists($request, 'validated') ? $request->validated() : $request->all();

        if ($request->hasFile('image')) {
            $data['cover_image'] = $request->file('image')->store('galleries', 'public');
        }

        $gallery = $this->service()->create($data);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $path = $file->store('galleries/items', 'public');
                $gallery->items()->create([
                    'image' => $path,
                    'caption' => $file->getClientOriginalName(),
                ]);
            }
        }

        return $redirect->route($this->routePrefix() . '.index')->with('success', 'Created successfully.');
    }

    public function update(Request $request, $id, Redirector $redirect)
    {
        $gallery = $this->resolveModel($id);
        $data = method_exists($request, 'validated') ? $request->validated() : $request->all();

        if ($request->hasFile('image')) {
            $data['cover_image'] = $request->file('image')->store('galleries', 'public');
        }

        $this->service()->update($gallery, $data);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $path = $file->store('galleries/items', 'public');
                $gallery->items()->create([
                    'image' => $path,
                    'caption' => $file->getClientOriginalName(),
                ]);
            }
        }

        return $redirect->route($this->routePrefix() . '.index')->with('success', 'Updated successfully.');
    }

    public function destroyImage(Gallery $gallery, GalleryItem $item, Redirector $redirect)
    {
        $this->authorize('update', $gallery);

        abort_unless($item->gallery_id === $gallery->id, 404);

        Storage::disk('public')->delete($item->image);
        $item->delete();

        return $redirect->back()->with('success', 'Image deleted successfully.');
    }

    protected function service()
    {
        return $this->service;
    }

    protected function modelClass(): string
    {
        return Gallery::class;
    }

    protected function viewPath(): string
    {
        return 'admin.gallery';
    }

    protected function routePrefix(): string
    {
        return 'admin.galleries';
    }

    protected function singularVar(): string
    {
        return 'gallery';
    }

    protected function pluralVar(): string
    {
        return 'galleries';
    }
}

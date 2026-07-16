<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\StoreGalleryRequest;
use App\Http\Requests\Admin\UpdateGalleryRequest;
use App\Models\Gallery;
use App\Services\GalleryService;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

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
        return parent::store($request, $redirect);
    }

    public function update(Request $request, $gallery, Redirector $redirect)
    {
        return parent::update($request, $gallery, $redirect);
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

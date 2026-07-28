<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\StorePublicationRequest;
use App\Http\Requests\Admin\UpdatePublicationRequest;
use App\Models\Publication;
use App\Services\PublicationService;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Validator;

class PublicationController extends BaseCrudController
{
    protected $service;

    protected array $searchFields = ['title', 'slug', 'summary', 'content', 'status'];
    protected array $filterFields = ['status', 'category', 'from', 'to'];
    protected array $sortableFields = ['title', 'created_at', 'updated_at', 'published_at', 'status'];

    public function __construct(PublicationService $service)
    {
        $this->service = $service;
    }

    public function store(Request $request, Redirector $redirect)
    {
        $validator = Validator::make($request->all(), (new StorePublicationRequest())->rules());

        if ($validator->fails()) {
            return $redirect->back()->withErrors($validator)->withInput();
        }

        return parent::store($request, $redirect);
    }

    public function update(Request $request, $publication, Redirector $redirect)
    {
        $validator = Validator::make($request->all(), (new UpdatePublicationRequest())->rules());

        if ($validator->fails()) {
            return $redirect->back()->withErrors($validator)->withInput();
        }

        return parent::update($request, $publication, $redirect);
    }

    protected function service()
    {
        return $this->service;
    }

    protected function modelClass(): string
    {
        return Publication::class;
    }

    protected function viewPath(): string
    {
        return 'admin.publications';
    }

    protected function routePrefix(): string
    {
        return 'admin.publications';
    }

    public function show($id)
    {
        $publication = $this->resolveModel($id);
        $this->authorize('view', $publication);

        $related = Publication::where('category', $publication->category)
            ->where('id', '!=', $publication->id)
            ->where('status', 'published')
            ->latest('published_at')
            ->take(3)
            ->get();

        return view($this->viewPath() . '.show', [
            $this->singularVar() => $publication,
            'related' => $related,
        ]);
    }

    protected function singularVar(): string
    {
        return 'publication';
    }

    protected function pluralVar(): string
    {
        return 'publications';
    }
}

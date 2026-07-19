<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use App\Services\NewsService;
use App\Http\Requests\Admin\StoreNewsRequest;
use App\Http\Requests\Admin\UpdateNewsRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class NewsController extends BaseCrudController
{
    protected $service;

    protected array $searchFields = ['title', 'slug', 'excerpt', 'status'];
    protected array $filterFields = ['status', 'author', 'from', 'to'];
    protected array $sortableFields = ['title', 'created_at', 'updated_at', 'published_at', 'status'];

    public function __construct(NewsService $service)
    {
        $this->service = $service;
    }

    public function create()
    {
        $categories = \App\Models\NewsCategory::all();
        return view($this->viewPath() . '.create', [
            $this->singularVar() => new News(),
            'categories' => $categories
        ]);
    }

    public function edit($id)
    {
        $model = $this->resolveModel($id);
        $this->authorize('update', $model);
        $categories = \App\Models\NewsCategory::all();

        return view($this->viewPath() . '.edit', [
            $this->singularVar() => $model,
            'categories' => $categories
        ]);
    }

    public function store(Request $request, Redirector $redirect)
    {
        return parent::store($request, $redirect);
    }

    public function update(Request $request, $news, Redirector $redirect)
    {
        return parent::update($request, $news, $redirect);
    }

    protected function service()
    {
        return $this->service;
    }

    protected function modelClass(): string
    {
        return News::class;
    }

    protected function viewPath(): string
    {
        return 'admin.news';
    }

    protected function routePrefix(): string
    {
        return 'admin.news';
    }

    protected function singularVar(): string
    {
        return 'news';
    }

    protected function pluralVar(): string
    {
        return 'news';
    }
}


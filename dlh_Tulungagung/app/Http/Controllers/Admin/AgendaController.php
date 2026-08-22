<?php

namespace App\Http\Controllers\Admin;

use App\Models\Agenda;
use App\Models\News;
use App\Services\AgendaService;
use Illuminate\Http\Request;

class AgendaController extends BaseCrudController
{
    protected $service;

    protected array $searchFields = ['title', 'location', 'organizer'];
    protected array $sortableFields = ['title', 'start_date', 'end_date', 'status'];

    public function __construct(AgendaService $service)
    {
        $this->service = $service;
    }

    public function create()
    {
        $this->authorize('create', $this->modelClass());
        
        return view($this->viewPath() . '.create', [
            $this->singularVar() => new Agenda(),
            'news' => News::latest('published_at')->take(50)->get()
        ]);
    }

    public function edit($id)
    {
        $model = $this->resolveModel($id);
        $this->authorize('update', $model);
        
        return view($this->viewPath() . '.edit', [
            $this->singularVar() => $model,
            'news' => News::latest('published_at')->take(50)->get()
        ]);
    }

    protected function service()
    {
        return $this->service;
    }

    protected function modelClass(): string
    {
        return Agenda::class;
    }

    protected function viewPath(): string
    {
        return 'admin.agendas';
    }

    protected function routePrefix(): string
    {
        return 'admin.agendas';
    }

    protected function singularVar(): string
    {
        return 'agenda';
    }

    protected function pluralVar(): string
    {
        return 'agendas';
    }
}

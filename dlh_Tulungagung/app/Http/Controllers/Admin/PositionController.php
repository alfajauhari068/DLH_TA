<?php

namespace App\Http\Controllers\Admin;

use App\Models\Position;
use App\Models\Department;
use App\Services\PositionService;

class PositionController extends BaseCrudController
{
    protected $service;

    protected array $searchFields = ['name', 'code'];
    protected array $sortableFields = ['name', 'code', 'sort_order'];

    public function __construct(PositionService $service)
    {
        $this->service = $service;
    }

    public function create()
    {
        $this->authorize('create', $this->modelClass());
        
        return view($this->viewPath() . '.create', [
            $this->singularVar() => new Position(),
            'departments' => Department::all()
        ]);
    }

    public function edit($id)
    {
        $model = $this->resolveModel($id);
        $this->authorize('update', $model);
        
        return view($this->viewPath() . '.edit', [
            $this->singularVar() => $model,
            'departments' => Department::all()
        ]);
    }

    protected function service()
    {
        return $this->service;
    }

    protected function modelClass(): string
    {
        return Position::class;
    }

    protected function viewPath(): string
    {
        return 'admin.positions';
    }

    protected function routePrefix(): string
    {
        return 'admin.positions';
    }

    protected function singularVar(): string
    {
        return 'position';
    }

    protected function pluralVar(): string
    {
        return 'positions';
    }
}

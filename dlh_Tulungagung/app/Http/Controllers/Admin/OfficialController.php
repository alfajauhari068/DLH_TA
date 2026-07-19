<?php

namespace App\Http\Controllers\Admin;

use App\Models\Official;
use App\Models\Department;
use App\Models\Position;
use App\Services\OfficialService;
use Illuminate\Http\Request;

class OfficialController extends BaseCrudController
{
    protected $service;

    protected array $searchFields = ['name', 'email', 'phone'];
    protected array $sortableFields = ['name', 'display_order'];
    protected array $filterFields = ['department_id', 'position_id', 'status'];

    public function __construct(OfficialService $service)
    {
        $this->service = $service;
    }

    public function create()
    {
        $this->authorize('create', $this->modelClass());
        
        return view($this->viewPath() . '.create', [
            $this->singularVar() => new Official(),
            'departments' => Department::all(),
            'positions' => Position::orderBy('sort_order')->get()
        ]);
    }

    public function edit($id)
    {
        $model = $this->resolveModel($id);
        $this->authorize('update', $model);
        
        return view($this->viewPath() . '.edit', [
            $this->singularVar() => $model,
            'departments' => Department::all(),
            'positions' => Position::orderBy('sort_order')->get()
        ]);
    }

    protected function service()
    {
        return $this->service;
    }

    protected function modelClass(): string
    {
        return Official::class;
    }

    protected function viewPath(): string
    {
        return 'admin.officials';
    }

    protected function routePrefix(): string
    {
        return 'admin.officials';
    }

    protected function singularVar(): string
    {
        return 'official';
    }

    protected function pluralVar(): string
    {
        return 'officials';
    }
}

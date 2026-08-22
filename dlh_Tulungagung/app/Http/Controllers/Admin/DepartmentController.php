<?php

namespace App\Http\Controllers\Admin;

use App\Models\Department;
use App\Services\DepartmentService;
use Illuminate\Http\Request;

class DepartmentController extends BaseCrudController
{
    protected $service;

    protected array $searchFields = ['name', 'description'];
    protected array $sortableFields = ['name', 'created_at', 'updated_at'];

    public function __construct(DepartmentService $service)
    {
        $this->service = $service;
    }

    public function create()
    {
        $this->authorize('create', $this->modelClass());
        
        return view($this->viewPath() . '.create', [
            $this->singularVar() => new Department(),
            'departments' => Department::whereNull('parent_id')->get()
        ]);
    }

    public function edit($id)
    {
        $model = $this->resolveModel($id);
        $this->authorize('update', $model);
        
        return view($this->viewPath() . '.edit', [
            $this->singularVar() => $model,
            'departments' => Department::whereNull('parent_id')->where('id', '!=', $id)->get()
        ]);
    }

    protected function service()
    {
        return $this->service;
    }

    protected function modelClass(): string
    {
        return Department::class;
    }

    protected function viewPath(): string
    {
        return 'admin.departments';
    }

    protected function routePrefix(): string
    {
        return 'admin.departments';
    }

    protected function singularVar(): string
    {
        return 'department';
    }

    protected function pluralVar(): string
    {
        return 'departments';
    }
}

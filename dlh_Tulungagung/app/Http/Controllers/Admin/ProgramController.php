<?php

namespace App\Http\Controllers\Admin;

use App\Models\Program;
use App\Services\ProgramService;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class ProgramController extends BaseCrudController
{
    protected $service;

    protected array $searchFields = ['title', 'slug', 'excerpt', 'content', 'status'];
    protected array $filterFields = ['status', 'author', 'from', 'to'];
    protected array $sortableFields = ['title', 'created_at', 'updated_at', 'published_at', 'status'];

    public function __construct(ProgramService $service)
    {
        $this->service = $service;
    }

    public function store(Request $request, Redirector $redirect)
    {
        return parent::store($request, $redirect);
    }

    public function update(Request $request, $program, Redirector $redirect)
    {
        return parent::update($request, $program, $redirect);
    }

    protected function service()
    {
        return $this->service;
    }

    protected function modelClass(): string
    {
        return Program::class;
    }

    protected function viewPath(): string
    {
        return 'admin.programs';
    }

    protected function routePrefix(): string
    {
        return 'admin.programs';
    }

    protected function singularVar(): string
    {
        return 'program';
    }

    protected function pluralVar(): string
    {
        return 'programs';
    }
}

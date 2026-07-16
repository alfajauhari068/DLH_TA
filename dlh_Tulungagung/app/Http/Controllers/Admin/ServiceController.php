<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\StoreServiceRequest;
use App\Http\Requests\Admin\UpdateServiceRequest;
use App\Models\Service;
use App\Services\ServiceService;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class ServiceController extends BaseCrudController
{
    protected $service;

    protected array $searchFields = ['title', 'slug', 'summary', 'description', 'service_category', 'service_type', 'status', 'contact_person'];
    protected array $filterFields = ['status', 'category', 'type', 'featured', 'published_at', 'author', 'created_from', 'created_to', 'updated_from', 'updated_to'];
    protected array $sortableFields = ['title', 'created_at', 'updated_at', 'published_at', 'status', 'sort_order'];

    public function __construct(ServiceService $service)
    {
        $this->service = $service;
    }

    public function store(Request $request, Redirector $redirect)
    {
        return parent::store($request, $redirect);
    }

    public function update(Request $request, $service, Redirector $redirect)
    {
        return parent::update($request, $service, $redirect);
    }

    protected function service()
    {
        return $this->service;
    }

    protected function modelClass(): string
    {
        return Service::class;
    }

    protected function viewPath(): string
    {
        return 'admin.services';
    }

    protected function routePrefix(): string
    {
        return 'admin.services';
    }

    protected function singularVar(): string
    {
        return 'service';
    }

    protected function pluralVar(): string
    {
        return 'services';
    }
}

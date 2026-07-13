<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreServiceRequest;
use App\Http\Requests\Admin\UpdateServiceRequest;
use App\Models\Service;
use App\Services\ServiceService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function __construct(protected ServiceService $serviceService)
    {
    }

    public function index(Request $request): View
    {
        $this->authorize('viewAny', Service::class);

        $services = $this->serviceService->paginate($request->query('per_page', 15));

        return view('admin.services.index', compact('services'));
    }

    public function create(): View
    {
        $this->authorize('create', Service::class);

        return view('admin.services.create');
    }

    public function store(StoreServiceRequest $request): RedirectResponse
    {
        $this->authorize('create', Service::class);

        $this->serviceService->create($request->validated());

        return redirect()->route('admin.services.index')->with('success', 'Service created successfully.');
    }

    public function show(Service $service): View
    {
        $this->authorize('view', $service);

        return view('admin.services.show', compact('service'));
    }

    public function edit(Service $service): View
    {
        $this->authorize('update', $service);

        return view('admin.services.edit', compact('service'));
    }

    public function update(UpdateServiceRequest $request, Service $service): RedirectResponse
    {
        $this->authorize('update', $service);

        $this->serviceService->update($service, $request->validated());

        return redirect()->route('admin.services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy(Service $service): RedirectResponse
    {
        $this->authorize('delete', $service);

        $this->serviceService->delete($service);

        return redirect()->route('admin.services.index')->with('success', 'Service deleted successfully.');
    }
}

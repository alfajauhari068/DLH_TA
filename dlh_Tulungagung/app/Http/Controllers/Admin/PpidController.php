<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StorePpidRequest;
use App\Http\Requests\Admin\UpdatePpidRequest;
use App\Models\PpidDocument;
use App\Services\PpidService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PpidController extends Controller
{
    public function __construct(protected PpidService $ppidService)
    {
    }

    public function index(Request $request): View
    {
        $this->authorize('viewAny', PpidDocument::class);

        $ppids = $this->ppidService->paginate($request->query('per_page', 15));

        return view('admin.ppid.index', compact('ppids'));
    }

    public function create(): View
    {
        $this->authorize('create', PpidDocument::class);

        return view('admin.ppid.create');
    }

    public function store(StorePpidRequest $request): RedirectResponse
    {
        $this->authorize('create', PpidDocument::class);

        $this->ppidService->create($request->validated());

        return redirect()->route('admin.ppid.index')->with('success', 'PPID document created successfully.');
    }

    public function show(PpidDocument $ppidDocument): View
    {
        $this->authorize('view', $ppidDocument);

        return view('admin.ppid.show', compact('ppidDocument'));
    }

    public function edit(PpidDocument $ppidDocument): View
    {
        $this->authorize('update', $ppidDocument);

        return view('admin.ppid.edit', compact('ppidDocument'));
    }

    public function update(UpdatePpidRequest $request, PpidDocument $ppidDocument): RedirectResponse
    {
        $this->authorize('update', $ppidDocument);

        $this->ppidService->update($ppidDocument, $request->validated());

        return redirect()->route('admin.ppid.index')->with('success', 'PPID document updated successfully.');
    }

    public function destroy(PpidDocument $ppidDocument): RedirectResponse
    {
        $this->authorize('delete', $ppidDocument);

        $this->ppidService->delete($ppidDocument);

        return redirect()->route('admin.ppid.index')->with('success', 'PPID document deleted successfully.');
    }
}

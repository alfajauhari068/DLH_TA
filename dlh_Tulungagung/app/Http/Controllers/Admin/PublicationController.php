<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StorePublicationRequest;
use App\Http\Requests\Admin\UpdatePublicationRequest;
use App\Models\Publication;
use App\Services\PublicationService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PublicationController extends Controller
{
    public function __construct(protected PublicationService $publicationService)
    {
    }

    public function index(Request $request): View
    {
        $this->authorize('viewAny', Publication::class);

        $publications = $this->publicationService->paginate($request->query('per_page', 15));

        return view('admin.publications.index', compact('publications'));
    }

    public function create(): View
    {
        $this->authorize('create', Publication::class);

        return view('admin.publications.create');
    }

    public function store(StorePublicationRequest $request): RedirectResponse
    {
        $this->authorize('create', Publication::class);

        $this->publicationService->create($request->validated());

        return redirect()->route('admin.publications.index')->with('success', 'Publication created successfully.');
    }

    public function show(Publication $publication): View
    {
        $this->authorize('view', $publication);

        return view('admin.publications.show', compact('publication'));
    }

    public function edit(Publication $publication): View
    {
        $this->authorize('update', $publication);

        return view('admin.publications.edit', compact('publication'));
    }

    public function update(UpdatePublicationRequest $request, Publication $publication): RedirectResponse
    {
        $this->authorize('update', $publication);

        $this->publicationService->update($publication, $request->validated());

        return redirect()->route('admin.publications.index')->with('success', 'Publication updated successfully.');
    }

    public function destroy(Publication $publication): RedirectResponse
    {
        $this->authorize('delete', $publication);

        $this->publicationService->delete($publication);

        return redirect()->route('admin.publications.index')->with('success', 'Publication deleted successfully.');
    }
}

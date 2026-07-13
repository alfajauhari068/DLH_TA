<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StorePageRequest;
use App\Http\Requests\Admin\UpdatePageRequest;
use App\Models\Page;
use App\Services\PageService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    public function __construct(protected PageService $pageService)
    {
    }

    public function index(Request $request): View
    {
        $this->authorize('viewAny', Page::class);

        $pages = $this->pageService->paginate($request->query('per_page', 15));

        return view('admin.pages.index', compact('pages'));
    }

    public function create(): View
    {
        $this->authorize('create', Page::class);

        return view('admin.pages.create');
    }

    public function store(StorePageRequest $request): RedirectResponse
    {
        $this->authorize('create', Page::class);

        $this->pageService->create($request->validated());

        return redirect()->route('admin.pages.index')->with('success', 'Page created successfully.');
    }

    public function show(Page $page): View
    {
        $this->authorize('view', $page);

        return view('admin.pages.show', compact('page'));
    }

    public function edit(Page $page): View
    {
        $this->authorize('update', $page);

        return view('admin.pages.edit', compact('page'));
    }

    public function update(UpdatePageRequest $request, Page $page): RedirectResponse
    {
        $this->authorize('update', $page);

        $this->pageService->update($page, $request->validated());

        return redirect()->route('admin.pages.index')->with('success', 'Page updated successfully.');
    }

    public function destroy(Page $page): RedirectResponse
    {
        $this->authorize('delete', $page);

        $this->pageService->delete($page);

        return redirect()->route('admin.pages.index')->with('success', 'Page deleted successfully.');
    }
}

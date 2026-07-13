<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreNewsRequest;
use App\Http\Requests\Admin\UpdateNewsRequest;
use App\Models\News;
use App\Services\NewsService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NewsController extends Controller
{
    public function __construct(protected NewsService $newsService)
    {
    }

    public function index(Request $request): View
    {
        $this->authorize('viewAny', News::class);

        $news = $this->newsService->paginate($request->query('per_page', 15));

        return view('admin.news.index', compact('news'));
    }

    public function create(): View
    {
        $this->authorize('create', News::class);

        return view('admin.news.create');
    }

    public function store(StoreNewsRequest $request): RedirectResponse
    {
        $this->authorize('create', News::class);

        $this->newsService->create($request->validated());

        return redirect()->route('admin.news.index')->with('success', 'News created successfully.');
    }

    public function show(News $news): View
    {
        $this->authorize('view', $news);

        return view('admin.news.show', compact('news'));
    }

    public function edit(News $news): View
    {
        $this->authorize('update', $news);

        return view('admin.news.edit', compact('news'));
    }

    public function update(UpdateNewsRequest $request, News $news): RedirectResponse
    {
        $this->authorize('update', $news);

        $this->newsService->update($news, $request->validated());

        return redirect()->route('admin.news.index')->with('success', 'News updated successfully.');
    }

    public function destroy(News $news): RedirectResponse
    {
        $this->authorize('delete', $news);

        $this->newsService->delete($news);

        return redirect()->route('admin.news.index')->with('success', 'News deleted successfully.');
    }
}

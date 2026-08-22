<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\StoreDownloadRequest;
use App\Http\Requests\Admin\UpdateDownloadRequest;
use App\Models\Download;
use App\Services\DownloadService;
use Illuminate\Routing\Redirector;

class DownloadController extends BaseCrudController
{
    protected DownloadService $service;

    public function __construct(DownloadService $service)
    {
        $this->service = $service;
    }

    public function store(StoreDownloadRequest $request, Redirector $redirect)
    {
        return parent::store($request, $redirect);
    }

    public function update(UpdateDownloadRequest $request, Download $download, Redirector $redirect)
    {
        return parent::update($request, $download, $redirect);
    }

    protected function service()
    {
        return $this->service;
    }

    protected function modelClass(): string
    {
        return Download::class;
    }

    protected function viewPath(): string
    {
        return 'admin.downloads';
    }

    protected function routePrefix(): string
    {
        return 'admin.downloads';
    }

    protected function singularVar(): string
    {
        return 'download';
    }

    protected function pluralVar(): string
    {
        return 'downloads';
    }
}

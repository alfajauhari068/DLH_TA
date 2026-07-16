<?php

namespace App\Services;

use App\Models\Page;
use App\Repositories\PageRepository;
use Illuminate\Http\Request;

class PageService extends ModuleService
{
    public function __construct(?PageRepository $repository = null)
    {
        parent::__construct(Page::class, []);
        $this->repository = $repository ?? new PageRepository();
    }

    protected $repository;

    public function paginate(Request|int|null $requestOrPerPage = null, int $defaultPerPage = null)
    {
        $perPage = $requestOrPerPage instanceof Request 
            ? (int) $requestOrPerPage->query('per_page', $defaultPerPage ?? 15)
            : ($requestOrPerPage ?? 15);
            
        return $this->repository->paginate(['per_page' => $perPage]);
    }

    public function create(array $data)
    {
        $this->normalizeSlug($data);
        $this->setAuditFields($data);

        return $this->repository->create($data);
    }

    public function update($model, array $data)
    {
        $this->normalizeSlug($data, $model);
        $this->setAuditFields($data);

        return $this->repository->update($model, $data);
    }

    public function delete($model)
    {
        return $this->repository->delete($model);
    }
}

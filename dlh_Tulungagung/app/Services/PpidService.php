<?php

namespace App\Services;

use App\Models\PpidDocument;
use App\Repositories\PpidRepository;
use Illuminate\Http\Request;

class PpidService extends ModuleService
{
    public function __construct(?PpidRepository $repository = null)
    {
        parent::__construct(PpidDocument::class, []);
        $this->repository = $repository ?? new PpidRepository();
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

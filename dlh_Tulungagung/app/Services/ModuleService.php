<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ModuleService extends CrudService
{
    protected array $moduleConfig = [];

    public function __construct(string $modelClass = null, array $moduleConfig = [])
    {
        parent::__construct($modelClass);
        $this->moduleConfig = $moduleConfig;
    }

    protected function normalizeSlug(array &$data, ?Model $model = null): void
    {
        if (empty($data['slug']) && ! empty($data['title'])) {
            $data['slug'] = Str::slug($data['title']);
        }

        if (! empty($data['slug'])) {
            $base = Str::slug($data['slug']);
            $slug = $base;
            $i = 1;
            $modelClass = $this->modelClass;
            while ($modelClass::where('slug', $slug)->when($model, function ($query) use ($model) {
                return $query->where('id', '!=', $model->id);
            })->exists()) {
                $slug = $base . '-' . $i++;
            }
            $data['slug'] = $slug;
        }
    }

    protected function handlePublishing(array &$data, ?Model $model = null): void
    {
        $publishedStatus = config('cms.status.published') ?? 1;
        $isPublished = isset($data['status']) && ($data['status'] === $publishedStatus || $data['status'] === 'published' || (int) $data['status'] === $publishedStatus);

        if ($isPublished) {
            $data['published_at'] = $data['published_at'] ?? now();
        }

        if ($model && empty($model->published_at) && $isPublished) {
            $data['published_at'] = $data['published_at'] ?? now();
        }
    }

    protected function setAuditFields(array &$data): void
    {
        if (auth()->check()) {
            $data['created_by'] = $data['created_by'] ?? auth()->id();
            $data['updated_by'] = $data['updated_by'] ?? auth()->id();
        }
    }

    public function create(array $data)
    {
        $this->normalizeSlug($data);
        $this->handlePublishing($data);
        $this->setAuditFields($data);

        return parent::create($data);
    }

    public function update($model, array $data)
    {
        $this->normalizeSlug($data, $model);
        $this->handlePublishing($data, $model);
        $this->setAuditFields($data);

        return parent::update($model, $data);
    }


}

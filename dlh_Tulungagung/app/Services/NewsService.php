<?php

namespace App\Services;

use App\Models\News;

class NewsService extends ModuleService
{
    public function __construct()
    {
        parent::__construct(News::class, [
            'slug' => true,
            'publish' => true,
            'archive' => true,
            'soft_delete' => true,
            'audit' => true,
        ]);
    }

    public function create(array $data)
    {
        if (isset($data['category_ids']) && is_array($data['category_ids']) && count($data['category_ids']) > 0) {
            $data['category_id'] = $data['category_ids'][0];
        } else {
            // Provide a default if no categories are selected to avoid SQL error
            $data['category_id'] = 1; 
        }

        if (!isset($data['author_id'])) {
            $data['author_id'] = auth()->id() ?? 1;
        }

        if (isset($data['thumbnail']) && $data['thumbnail'] instanceof \Illuminate\Http\UploadedFile) {
            $data['featured_image'] = $data['thumbnail']->store('news', 'public');
        }

        $model = parent::create($data);
        
        if (isset($data['category_ids'])) {
            $model->categories()->sync($data['category_ids']);
        }
        
        return $model;
    }

    public function update($model, array $data)
    {
        if (isset($data['category_ids']) && is_array($data['category_ids']) && count($data['category_ids']) > 0) {
            $data['category_id'] = $data['category_ids'][0];
        }

        if (isset($data['thumbnail']) && $data['thumbnail'] instanceof \Illuminate\Http\UploadedFile) {
            if ($model->featured_image && \Illuminate\Support\Facades\Storage::disk('public')->exists($model->featured_image)) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($model->featured_image);
            }
            $data['featured_image'] = $data['thumbnail']->store('news', 'public');
        }

        $model = parent::update($model, $data);
        
        if (isset($data['category_ids'])) {
            $model->categories()->sync($data['category_ids']);
        } else {
            $model->categories()->sync([]);
        }
        
        return $model;
    }
}


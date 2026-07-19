<?php

namespace App\Services;

use App\Models\Service;
use Illuminate\Http\UploadedFile;

class ServiceService extends ModuleService
{
    public function __construct()
    {
        parent::__construct(Service::class, [
            'slug' => true,
            'publish' => true,
            'archive' => true,
            'soft_delete' => true,
            'audit' => true,
            'media' => true,
        ]);
    }

    public function create(array $data)
    {
        $this->handleMedia($data);

        return parent::create($data);
    }

    public function update($model, array $data)
    {
        $this->handleMedia($data, $model);

        return parent::update($model, $data);
    }

    public function publish(Service $service): bool
    {
        $service->forceFill(['status' => 'published', 'published_at' => $service->published_at ?? now()]);

        return $service->save();
    }

    public function unpublish(Service $service): bool
    {
        $service->forceFill(['status' => 'draft']);

        return $service->save();
    }

    public function duplicate(Service $service): Service
    {
        $clone = $service->replicate(['slug']);
        $clone->slug = $service->slug . '-copy';
        $clone->status = 'draft';
        $clone->published_at = null;
        $clone->save();

        return $clone;
    }

    public function feature(Service $service): bool
    {
        $service->forceFill(['is_featured' => true]);

        return $service->save();
    }

    protected function handleMedia(array &$data, ?Service $service = null): void
    {
        $mediaService = app(MediaService::class);

        foreach (['icon', 'thumbnail', 'banner'] as $field) {
            if (! array_key_exists($field, $data)) {
                continue;
            }

            $value = $data[$field];

            if ($value instanceof UploadedFile) {
                if ($service && ! empty($service->{$field})) {
                    $mediaService->delete($service->{$field});
                }

                $result = $mediaService->upload($value, 'public', 'services/' . $field . 's');
                $data[$field] = $result['path'];
            }
        }
    }
}

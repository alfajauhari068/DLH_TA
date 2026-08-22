<?php

namespace App\Services;

use App\Models\Program;
use Illuminate\Http\UploadedFile;

class ProgramService extends ModuleService
{
    public function __construct()
    {
        parent::__construct(Program::class, [
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
        $featuredImage = $data['featured_image'] ?? null;
        if ($featuredImage instanceof UploadedFile) {
            unset($data['featured_image']);
        }

        $model = parent::create($data);

        if ($featuredImage instanceof UploadedFile) {
            $this->uploadFeaturedImage($model, $featuredImage);
        }

        return $model;
    }

    public function update($model, array $data)
    {
        $featuredImage = $data['featured_image'] ?? null;
        if ($featuredImage instanceof UploadedFile) {
            unset($data['featured_image']);
        }

        $model = parent::update($model, $data);

        if ($featuredImage instanceof UploadedFile) {
            $this->uploadFeaturedImage($model, $featuredImage);
        }

        return $model;
    }

    public function publish(Program $program): bool
    {
        $program->forceFill(['status' => 'published', 'published_at' => now()]);
        return $program->save();
    }

    public function uploadFeaturedImage(Program $program, UploadedFile $file): array
    {
        $mediaService = app(MediaService::class);
        $result = $mediaService->replace($program->featured_image, $file, 'public', 'programs');
        $program->forceFill(['featured_image' => $result['path']]);
        $program->save();

        return $result;
    }

    public function unpublish(Program $program): bool
    {
        $program->forceFill(['status' => 'draft']);
        return $program->save();
    }

    public function duplicate(Program $program): Program
    {
        $clone = $program->replicate(['slug']);
        $clone->slug = $program->slug . '-copy';
        $clone->save();

        return $clone;
    }

    public function feature(Program $program): bool
    {
        $program->forceFill(['featured' => true]);
        return $program->save();
    }
}

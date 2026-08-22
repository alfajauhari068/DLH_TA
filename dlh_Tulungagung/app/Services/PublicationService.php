<?php

namespace App\Services;

use App\Models\Publication;
use Illuminate\Http\UploadedFile;

class PublicationService extends ModuleService
{
    public function __construct()
    {
        parent::__construct(Publication::class, [
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
        $cover = $data['cover_file'] ?? null;
        $document = $data['document_file'] ?? null;
        
        // Remove uploaded files from data to prevent storing temp paths
        if ($cover instanceof UploadedFile) {
            unset($data['cover_file']);
        }
        if ($document instanceof UploadedFile) {
            unset($data['document_file']);
        }

        $model = parent::create($data);

        if ($cover instanceof UploadedFile) {
            $this->uploadCover($model, $cover);
        }
        if ($document instanceof UploadedFile) {
            $this->uploadDocument($model, $document);
        }

        return $model;
    }

    public function update($model, array $data)
    {
        $cover = $data['cover_file'] ?? null;
        $document = $data['document_file'] ?? null;
        
        // Remove uploaded files from data to prevent storing temp paths
        if ($cover instanceof UploadedFile) {
            unset($data['cover_file']);
        }
        if ($document instanceof UploadedFile) {
            unset($data['document_file']);
        }

        $model = parent::update($model, $data);

        if ($cover instanceof UploadedFile) {
            $this->uploadCover($model, $cover);
        }
        if ($document instanceof UploadedFile) {
            $this->uploadDocument($model, $document);
        }

        return $model;
    }

    public function uploadCover(Publication $publication, UploadedFile $file): array
    {
        $mediaService = app(MediaService::class);
        $result = $mediaService->replace($publication->cover_file, $file, 'public', 'publications/covers');
        $publication->forceFill(['cover_file' => $result['path']]);
        $publication->save();

        return $result;
    }

    public function uploadDocument(Publication $publication, UploadedFile $file): array
    {
        $mediaService = app(MediaService::class);
        $result = $mediaService->replace($publication->document_file, $file, 'public', 'publications/documents');
        $publication->forceFill(['document_file' => $result['path']]);
        $publication->save();

        return $result;
    }
}


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


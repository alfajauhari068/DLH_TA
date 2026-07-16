<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class MediaService
{
    public function upload(UploadedFile $file, string $disk = 'public', ?string $path = null): array
    {
        $path = $path ?? 'uploads';
        $storedPath = $file->store($path, $disk);

        return [
            'path' => $storedPath,
            'url' => Storage::disk($disk)->url($storedPath),
            'disk' => $disk,
            'mime' => $file->getMimeType(),
        ];
    }

    public function replace(?string $existingPath, UploadedFile $file, string $disk = 'public', ?string $path = null): array
    {
        if ($existingPath) {
            $this->delete($existingPath, $disk);
        }

        return $this->upload($file, $disk, $path);
    }

    public function delete(string $path, string $disk = 'public'): bool
    {
        return Storage::disk($disk)->delete($path);
    }

    public function url(?string $path, string $disk = 'public'): ?string
    {
        if (empty($path)) {
            return null;
        }

        return Storage::disk($disk)->url($path);
    }

    public function thumbnail(?string $path, string $disk = 'public', int $width = 300): ?string
    {
        if (empty($path)) {
            return null;
        }

        return $this->url($path, $disk);
    }
}

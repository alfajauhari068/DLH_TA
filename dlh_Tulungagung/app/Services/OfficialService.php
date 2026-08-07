<?php

namespace App\Services;

use App\Models\Official;

class OfficialService extends ModuleService
{
    public function __construct()
    {
        parent::__construct(Official::class);
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

    protected function handleMedia(array &$data, ?Official $official = null): void
    {
        $mediaService = app(MediaService::class);

        if (array_key_exists('photo', $data)) {
            $value = $data['photo'];

            if ($value instanceof \Illuminate\Http\UploadedFile) {
                if ($official && !empty($official->photo)) {
                    $mediaService->delete($official->photo);
                }

                $result = $mediaService->upload($value, 'public', 'officials/photos');
                $data['photo'] = $result['path'];
            }
        }
    }
}

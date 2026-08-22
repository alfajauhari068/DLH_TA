<?php

namespace App\Services;

use App\Models\Setting;
use Illuminate\Pagination\LengthAwarePaginator;

class SettingService
{
    public function paginate(int $perPage = 15): LengthAwarePaginator
    {
        return Setting::query()->latest()->paginate($perPage);
    }

    public function update(Setting $setting, array $data): Setting
    {
        $setting->fill($data);
        $setting->save();

        return $setting;
    }
}

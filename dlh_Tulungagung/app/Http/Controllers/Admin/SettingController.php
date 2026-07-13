<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateSettingRequest;
use App\Models\Setting;
use App\Services\SettingService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SettingController extends Controller
{
    public function __construct(protected SettingService $settingService)
    {
    }

    public function index(Request $request): View
    {
        $this->authorize('viewAny', Setting::class);

        $settings = $this->settingService->paginate($request->query('per_page', 15));

        return view('admin.settings.index', compact('settings'));
    }

    public function edit(Setting $setting): View
    {
        $this->authorize('update', $setting);

        return view('admin.settings.edit', compact('setting'));
    }

    public function update(UpdateSettingRequest $request, Setting $setting): RedirectResponse
    {
        $this->authorize('update', $setting);

        $this->settingService->update($setting, $request->validated());

        return redirect()->route('admin.settings.index')->with('success', 'Setting updated successfully.');
    }
}

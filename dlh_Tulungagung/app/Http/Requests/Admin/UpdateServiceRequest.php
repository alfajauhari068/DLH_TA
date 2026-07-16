<?php

namespace App\Http\Requests\Admin;

use App\Models\Service;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateServiceRequest extends FormRequest
{
    public function authorize(): bool
    {
        $service = $this->route('service');
        $model = $service instanceof Service ? $service : Service::findOrFail($service);

        return $this->user()?->can('update', $model) ?? false;
    }

    public function rules(): array
    {
        $service = $this->route('service');
        $id = $service instanceof Service ? $service->id : $service;

        return [
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', Rule::unique('services', 'slug')->ignore($id)],
            'summary' => ['nullable', 'string', 'max:1000'],
            'description' => ['nullable', 'string'],
            'service_type' => ['nullable', 'string', 'max:255'],
            'service_category' => ['nullable', 'string', 'max:255'],
            'icon' => ['nullable', 'string', 'max:255'],
            'thumbnail' => ['nullable', 'image', 'mimes:jpeg,png,webp,gif', 'max:2048'],
            'banner' => ['nullable', 'image', 'mimes:jpeg,png,webp,gif', 'max:2048'],
            'requirements' => ['nullable', 'string'],
            'workflow' => ['nullable', 'string'],
            'estimated_time' => ['nullable', 'string', 'max:255'],
            'service_fee' => ['nullable', 'string', 'max:255'],
            'contact_person' => ['nullable', 'string', 'max:255'],
            'contact_phone' => ['nullable', 'string', 'max:255'],
            'contact_email' => ['nullable', 'email', 'max:255'],
            'office_location' => ['nullable', 'string', 'max:255'],
            'office_hours' => ['nullable', 'string', 'max:255'],
            'status' => ['nullable', 'string', 'in:draft,published'],
            'is_featured' => ['nullable', 'boolean'],
            'sort_order' => ['nullable', 'integer'],
            'published_at' => ['nullable', 'date'],
        ];
    }
}

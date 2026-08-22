<?php

namespace App\Http\Requests\Admin;

use App\Models\Gallery;
use Illuminate\Foundation\Http\FormRequest;

class UpdateGalleryRequest extends FormRequest
{
    public function authorize(): bool
    {
        $routeModel = $this->route('gallery');
        $model = $routeModel instanceof Gallery ? $routeModel : Gallery::findOrFail($routeModel);

        return $this->user()?->can('update', $model) ?? false;
    }

    public function rules(): array
    {
        $routeModel = $this->route('gallery');
        $id = $routeModel instanceof Gallery ? $routeModel->id : $routeModel;

        return [
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', 'unique:galleries,slug,' . $id],
            'description' => ['nullable', 'string'],
            'thumbnail' => ['nullable', 'image'],
            'image' => ['nullable', 'image'],
            'images.*' => ['nullable', 'image', 'max:2048'],
            'status' => ['required', 'integer'],
            'sort_order' => ['nullable', 'integer'],
            'published_at' => ['nullable', 'date'],
            'meta_title' => ['nullable', 'string', 'max:255'],
            'meta_description' => ['nullable', 'string'],
            'meta_keywords' => ['nullable', 'string'],
        ];
    }
}

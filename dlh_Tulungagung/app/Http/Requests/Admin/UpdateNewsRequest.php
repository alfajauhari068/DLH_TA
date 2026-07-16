<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\News;

class UpdateNewsRequest extends FormRequest
{
    public function authorize(): bool
    {
        $routeParam = $this->route('news');

        if (is_object($routeParam)) {
            $model = $routeParam;
        } else {
            $model = News::findOrFail($routeParam);
        }

        return $this->user()->can('update', $model);
    }

    public function rules(): array
    {
        $routeParam = $this->route('news');
        if (is_object($routeParam)) {
            $id = $routeParam->id;
        } else {
            $id = $routeParam;
        }

        return [
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', 'unique:news,slug,' . $id],
            'excerpt' => ['nullable', 'string'],
            'content' => ['required', 'string'],
            'thumbnail' => ['nullable', 'image'],
            'status' => ['required', 'integer'],
            'published_at' => ['nullable', 'date'],
            'meta_title' => ['nullable', 'string', 'max:255'],
            'meta_description' => ['nullable', 'string'],
            'meta_keywords' => ['nullable', 'string'],
        ];
    }
}


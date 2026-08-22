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
            'category_ids' => ['nullable', 'array'],
            'category_ids.*' => ['exists:news_categories,id'],
            'excerpt' => ['nullable', 'string'],
            'content' => ['required', 'string'],
            'thumbnail' => ['nullable', 'image'],
            'status' => ['required', 'integer'],
            'published_at' => ['nullable', 'date'],
            'seo_title' => ['nullable', 'string', 'max:255'],
            'seo_description' => ['nullable', 'string'],
            'seo_keywords' => ['nullable', 'string'],
            'canonical_url' => ['nullable', 'url', 'max:255'],
            'og_title' => ['nullable', 'string', 'max:255'],
            'og_description' => ['nullable', 'string'],
            'twitter_card' => ['nullable', 'string', 'max:255'],
            'schema_json' => ['nullable', 'json'],
        ];
    }
}


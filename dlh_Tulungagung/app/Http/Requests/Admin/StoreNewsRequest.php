<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewsRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()->can('create', \App\Models\News::class);
    }

    public function rules(): array
    {
        $statusKeys = array_values(config('cms.status', []));

        return [
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', 'unique:news,slug'],
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


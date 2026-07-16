<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StorePublicationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('create', \App\Models\Publication::class) ?? false;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255'],
            'summary' => ['nullable', 'string'],
            'content' => ['nullable', 'string'],
            'category' => ['nullable', 'string', 'max:255'],
            'status' => ['nullable', 'string', 'in:draft,published'],
            'featured' => ['nullable', 'boolean'],
            'published_at' => ['nullable', 'date'],
            'cover_file' => ['nullable', 'file', 'mimes:jpg,jpeg,png,webp,pdf'],
            'document_file' => ['nullable', 'file', 'mimes:pdf,doc,docx,xls,xlsx,zip'],
        ];
    }
}

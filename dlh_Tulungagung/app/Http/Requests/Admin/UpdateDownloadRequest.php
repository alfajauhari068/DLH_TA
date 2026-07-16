<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDownloadRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('update', $this->route('download')) ?? false;
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
            'attachment' => ['nullable', 'file', 'max:20480', 'mimes:pdf,doc,docx,xls,xlsx,zip'],
            'published_at' => ['nullable', 'date'],
        ];
    }
}

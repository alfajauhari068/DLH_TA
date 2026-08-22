<?php

namespace App\Http\Requests\Admin;

use App\Models\Program;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreProgramRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('create', Program::class) ?? false;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', Rule::unique('programs', 'slug')],
            'excerpt' => ['nullable', 'string', 'max:1000'],
            'content' => ['nullable', 'string'],
            'featured_image' => ['nullable', 'image', 'mimes:jpeg,png,webp,gif', 'max:2048'],
            'status' => ['nullable', Rule::in(['draft', 'published', 1, 0])],
            'published_at' => ['nullable', 'date'],
        ];
    }
}

@extends('layouts.admin')

@section('title', 'Ubah Program')
@section('subtitle', 'Edit program entry: ' . $program->title)

@section('breadcrumb')
    <x-ui.breadcrumb :items="[
        ['label' => 'Dashboard', 'url' => route('dashboard')],
        ['label' => 'Programs', 'url' => route('admin.programs.index')],
        ['label' => 'Edit']
    ]" />
@endsection

@section('content')
    <form action="{{ route('admin.programs.update', $program) }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 lg:grid-cols-12 gap-6">
        @csrf
        @method('PUT')
        
        <div class="lg:col-span-8 space-y-6">
            <x-admin.form.card title="Program Details" padding="p-6">
                <!-- Title -->
                <div class="mb-6">
                    <label for="title" class="block text-sm font-semibold text-gray-700 mb-2">Title</label>
                    <input type="text" name="title" id="title" value="{{ old('title', $program->title) }}" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('title') border-red-500 @enderror" required>
                    @error('title') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>
                
                <!-- Slug -->
                <div class="mb-6">
                    <label for="slug" class="block text-sm font-semibold text-gray-700 mb-2">Slug</label>
                    <div class="flex items-center">
                        <span class="inline-flex items-center px-3 border border-r-0 border-gray-200 bg-gray-50 text-gray-500 text-sm rounded-l-xl h-[38px]">
                            /program/
                        </span>
                        <input type="text" name="slug" id="slug" value="{{ old('slug', $program->slug) }}" class="flex-1 border border-gray-200 rounded-r-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('slug') border-red-500 @enderror" placeholder="auto-generated-slug">
                    </div>
                    <p class="text-xs text-gray-400 mt-1.5">Leave blank to auto-generate from title.</p>
                    @error('slug') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <!-- Excerpt -->
                <div class="mb-6">
                    <label for="excerpt" class="block text-sm font-semibold text-gray-700 mb-2">Excerpt</label>
                    <textarea name="excerpt" id="excerpt" rows="3" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('excerpt') border-red-500 @enderror">{{ old('excerpt', $program->excerpt) }}</textarea>
                    @error('excerpt') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <!-- Content -->
                <div>
                    <label for="content" class="block text-sm font-semibold text-gray-700 mb-2">Content</label>
                    <x-admin.form.tinymce-editor name="content" id="content" :value="old('content', $program->content)" height="400" />
                </div>
            </x-admin.form.card>
        </div>

        <div class="lg:col-span-4 space-y-6">
            <x-admin.form.publish-card :model="$program" :statusOptions="['draft' => 'Draft', 'published' => 'Published']" />
            
            <x-admin.form.featured-image-card :model="$program" fieldName="featured_image" title="Featured Image" />
        </div>
    </form>

    @push('scripts')
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const titleInput = document.getElementById('title');
        const slugInput = document.getElementById('slug');
        let isSlugManual = false;

        if (slugInput && slugInput.value) {
            isSlugManual = true;
        }

        if (slugInput) {
            slugInput.addEventListener('input', function() {
                isSlugManual = true;
            });
        }

        if (titleInput && slugInput) {
            titleInput.addEventListener('keyup', function() {
                if (!isSlugManual) {
                    slugInput.value = titleInput.value
                        .toLowerCase()
                        .replace(/[^a-z0-9\s-]/g, '')
                        .replace(/[\s-]+/g, '-')
                        .replace(/^-+|-+$/g, '');
                }
            });
        }
    });
    </script>
    @endpush
@endsection

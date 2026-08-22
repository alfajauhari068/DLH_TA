@extends('layouts.admin')

@section('title', 'Ubah Halaman')
@section('subtitle', 'Edit static page: ' . $page->title)

@section('breadcrumb')
    <x-ui.breadcrumb :items="[
        ['label' => 'Dashboard', 'url' => route('dashboard')],
        ['label' => 'Pages', 'url' => route('admin.pages.index')],
        ['label' => 'Edit']
    ]" />
@endsection

@section('content')
    <form action="{{ route('admin.pages.update', $page->id) }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 lg:grid-cols-12 gap-6">
        @csrf
        @method('PUT')
        
        <div class="lg:col-span-8 space-y-6">
            <x-admin.form.card title="Page Information" padding="p-6">
                <!-- Title -->
                <div class="mb-6">
                    <label for="title" class="block text-sm font-semibold text-gray-700 mb-2">Title</label>
                    <input type="text" name="title" id="title" value="{{ old('title', $page->title) }}" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('title') border-red-500 @enderror" required>
                    @error('title') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>
                
                <!-- Slug -->
                <div class="mb-6">
                    <label for="slug" class="block text-sm font-semibold text-gray-700 mb-2">Slug</label>
                    <div class="flex items-center">
                        <span class="inline-flex items-center px-3 border border-r-0 border-gray-200 bg-gray-50 text-gray-500 text-sm rounded-l-xl h-[38px]">
                            /halaman/
                        </span>
                        <input type="text" name="slug" id="slug" value="{{ old('slug', $page->slug) }}" class="flex-1 border border-gray-200 rounded-r-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('slug') border-red-500 @enderror" placeholder="auto-generated-slug">
                    </div>
                    <p class="text-xs text-gray-400 mt-1.5">Leave blank to auto-generate from title.</p>
                    @error('slug') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>
            </x-admin.form.card>
            
            <x-admin.form.card title="Content" padding="p-6">
                <!-- Content TinyMCE -->
                <div>
                    <x-admin.form.tinymce-editor name="content" id="content" :value="old('content', $page->content)" height="500" />
                </div>
            </x-admin.form.card>
            
            <x-admin.form.seo-card :model="$page" />
        </div>

        <div class="lg:col-span-4 space-y-6">
            <x-admin.form.publish-card :model="$page" :statusOptions="['0' => 'Draft', '1' => 'Published']" />
            <x-admin.form.featured-image-card :model="$page" fieldName="banner" title="Banner Image" />
            
            <x-admin.form.card title="Page Attributes" padding="p-6">
                <div>
                    <label for="template" class="block text-sm font-semibold text-gray-700 mb-2">Template</label>
                    <select name="template" id="template" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm bg-white focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('template') border-red-500 @enderror">
                        <option value="default" {{ old('template', $page->template) == 'default' ? 'selected' : '' }}>Default Template</option>
                        <option value="full-width" {{ old('template', $page->template) == 'full-width' ? 'selected' : '' }}>Full Width</option>
                    </select>
                    @error('template') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>
            </x-admin.form.card>
        </div>
    </form>

    @push('scripts')
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const titleInput = document.getElementById('title');
        const slugInput = document.getElementById('slug');
        let isSlugManual = false;

        if (slugInput.value) {
            isSlugManual = true;
        }

        slugInput.addEventListener('input', function() {
            isSlugManual = true;
        });

        titleInput.addEventListener('keyup', function() {
            if (!isSlugManual) {
                slugInput.value = titleInput.value
                    .toLowerCase()
                    .replace(/[^a-z0-9\s-]/g, '')
                    .replace(/[\s-]+/g, '-')
                    .replace(/^-+|-+$/g, '');
            }
        });
    });
    </script>
    @endpush
@endsection

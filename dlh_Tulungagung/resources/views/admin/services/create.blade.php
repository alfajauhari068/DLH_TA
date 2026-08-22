@extends('layouts.admin')

@section('title', 'Tambah Layanan')
@section('subtitle', 'Create a new public service entry.')

@section('breadcrumb')
    <x-ui.breadcrumb :items="[
        ['label' => 'Dashboard', 'url' => route('dashboard')],
        ['label' => 'Services', 'url' => route('admin.services.index')],
        ['label' => 'Create']
    ]" />
@endsection

@section('content')
    <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 lg:grid-cols-12 gap-6">
        @csrf
        
        <div class="lg:col-span-8 space-y-6">
            <x-admin.form.card title="Service Information" padding="p-6">
                <!-- Title -->
                <div class="mb-6">
                    <label for="title" class="block text-sm font-semibold text-gray-700 mb-2">Title</label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('title') border-red-500 @enderror" required>
                    @error('title') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>
                
                <!-- Slug -->
                <div class="mb-6">
                    <label for="slug" class="block text-sm font-semibold text-gray-700 mb-2">Slug</label>
                    <div class="flex items-center">
                        <span class="inline-flex items-center px-3 border border-r-0 border-gray-200 bg-gray-50 text-gray-500 text-sm rounded-l-xl h-[38px]">
                            /layanan/
                        </span>
                        <input type="text" name="slug" id="slug" value="{{ old('slug') }}" class="flex-1 border border-gray-200 rounded-r-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('slug') border-red-500 @enderror" placeholder="auto-generated-slug">
                    </div>
                    <p class="text-xs text-gray-400 mt-1.5">Leave blank to auto-generate from title.</p>
                    @error('slug') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <!-- Summary -->
                <div class="mb-6">
                    <label for="summary" class="block text-sm font-semibold text-gray-700 mb-2">Summary</label>
                    <textarea name="summary" id="summary" rows="3" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('summary') border-red-500 @enderror">{{ old('summary') }}</textarea>
                    @error('summary') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <!-- Description -->
                <div>
                    <label for="description" class="block text-sm font-semibold text-gray-700 mb-2">Description</label>
                    <x-admin.form.tinymce-editor name="description" id="description" :value="old('description')" height="300" />
                </div>
            </x-admin.form.card>

            <x-admin.form.card title="Service Details" padding="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="service_type" class="block text-sm font-semibold text-gray-700 mb-2">Service Type</label>
                        <input type="text" name="service_type" id="service_type" value="{{ old('service_type') }}" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('service_type') border-red-500 @enderror">
                        @error('service_type') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label for="service_category" class="block text-sm font-semibold text-gray-700 mb-2">Category</label>
                        <input type="text" name="service_category" id="service_category" value="{{ old('service_category') }}" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('service_category') border-red-500 @enderror">
                        @error('service_category') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="mb-6">
                    <label for="requirements" class="block text-sm font-semibold text-gray-700 mb-2">Requirements</label>
                    <x-admin.form.tinymce-editor name="requirements" id="requirements" :value="old('requirements')" height="300" />
                </div>

                <div>
                    <label for="workflow" class="block text-sm font-semibold text-gray-700 mb-2">Workflow / Procedure</label>
                    <x-admin.form.tinymce-editor name="workflow" id="workflow" :value="old('workflow')" height="300" />
                </div>
            </x-admin.form.card>

            <x-admin.form.card title="Contact & Logistics" padding="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="contact_person" class="block text-sm font-semibold text-gray-700 mb-2">Contact Person</label>
                        <input type="text" name="contact_person" id="contact_person" value="{{ old('contact_person') }}" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('contact_person') border-red-500 @enderror">
                        @error('contact_person') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label for="contact_phone" class="block text-sm font-semibold text-gray-700 mb-2">Contact Phone</label>
                        <input type="text" name="contact_phone" id="contact_phone" value="{{ old('contact_phone') }}" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('contact_phone') border-red-500 @enderror">
                        @error('contact_phone') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="contact_email" class="block text-sm font-semibold text-gray-700 mb-2">Contact Email</label>
                        <input type="email" name="contact_email" id="contact_email" value="{{ old('contact_email') }}" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('contact_email') border-red-500 @enderror">
                        @error('contact_email') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label for="service_fee" class="block text-sm font-semibold text-gray-700 mb-2">Service Fee</label>
                        <input type="text" name="service_fee" id="service_fee" value="{{ old('service_fee') }}" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('service_fee') border-red-500 @enderror" placeholder="e.g. Free, Rp 50.000">
                        @error('service_fee') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="estimated_time" class="block text-sm font-semibold text-gray-700 mb-2">Estimated Time</label>
                        <input type="text" name="estimated_time" id="estimated_time" value="{{ old('estimated_time') }}" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('estimated_time') border-red-500 @enderror" placeholder="e.g. 3 Working Days">
                        @error('estimated_time') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label for="office_hours" class="block text-sm font-semibold text-gray-700 mb-2">Office Hours</label>
                        <input type="text" name="office_hours" id="office_hours" value="{{ old('office_hours') }}" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('office_hours') border-red-500 @enderror">
                        @error('office_hours') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                    </div>
                </div>
                <div>
                    <label for="office_location" class="block text-sm font-semibold text-gray-700 mb-2">Office Location</label>
                    <textarea name="office_location" id="office_location" rows="2" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('office_location') border-red-500 @enderror">{{ old('office_location') }}</textarea>
                    @error('office_location') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>
            </x-admin.form.card>
        </div>

        <div class="lg:col-span-4 space-y-6">
            <x-admin.form.publish-card :model="null" :statusOptions="['draft' => 'Draft', 'published' => 'Published', 'archived' => 'Archived']" />
            
            <x-admin.form.featured-image-card :model="null" fieldName="icon" title="Service Icon" />
            <x-admin.form.featured-image-card :model="null" fieldName="thumbnail" title="Thumbnail" />
            <x-admin.form.featured-image-card :model="null" fieldName="banner" title="Banner" />

            <x-admin.form.card title="Options" padding="p-6">
                <!-- Featured -->
                <div class="flex items-center justify-between p-4 border border-gray-100 rounded-xl bg-gray-50/50 mb-4">
                    <div>
                        <h4 class="text-sm font-semibold text-gray-900">Featured</h4>
                        <p class="text-xs text-gray-500 mt-0.5">Show on homepage</p>
                    </div>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="hidden" name="is_featured" value="0">
                        <input type="checkbox" name="is_featured" value="1" class="sr-only peer" @checked(old('is_featured', false))>
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary/20 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                    </label>
                </div>

                <div>
                    <label for="sort_order" class="block text-sm font-semibold text-gray-700 mb-2">Sort Order</label>
                    <input type="number" name="sort_order" id="sort_order" value="{{ old('sort_order', 0) }}" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('sort_order') border-red-500 @enderror">
                    @error('sort_order') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
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

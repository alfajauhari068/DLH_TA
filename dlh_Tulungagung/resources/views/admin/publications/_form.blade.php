<div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
    <div class="lg:col-span-8 space-y-6">
        <x-admin.form.card title="Publication Details" padding="p-6">
            <!-- Title -->
            <div class="mb-6">
                <label for="title" class="block text-sm font-semibold text-gray-700 mb-2">Title</label>
                <input type="text" name="title" id="title" value="{{ old('title', $publication->title ?? '') }}" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('title') border-red-500 @enderror" required>
                @error('title') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Slug -->
            <div class="mb-6">
                <label for="slug" class="block text-sm font-semibold text-gray-700 mb-2">Slug</label>
                <div class="flex items-center">
                    <span class="inline-flex items-center px-3 border border-r-0 border-gray-200 bg-gray-50 text-gray-500 text-sm rounded-l-xl h-[38px]">
                        /publikasi/
                    </span>
                    <input type="text" name="slug" id="slug" value="{{ old('slug', $publication->slug ?? '') }}" class="flex-1 border border-gray-200 rounded-r-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('slug') border-red-500 @enderror" placeholder="auto-generated-slug">
                </div>
                <p class="text-xs text-gray-400 mt-1.5">Leave blank to auto-generate from title.</p>
                @error('slug') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Summary -->
            <div class="mb-6">
                <label for="summary" class="block text-sm font-semibold text-gray-700 mb-2">Summary</label>
                <textarea name="summary" id="summary" rows="3" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('summary') border-red-500 @enderror">{{ old('summary', $publication->summary ?? '') }}</textarea>
                @error('summary') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Content -->
            <div>
                <label for="content" class="block text-sm font-semibold text-gray-700 mb-2">Content</label>
                <textarea name="content" id="content" rows="8" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('content') border-red-500 @enderror">{{ old('content', $publication->content ?? '') }}</textarea>
                @error('content') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
            </div>
        </x-admin.form.card>

        <x-admin.form.card title="Document File" padding="p-6">
            <div>
                <label for="document_file" class="block text-sm font-semibold text-gray-700 mb-2">Upload Document (PDF)</label>
                <input type="file" name="document_file" id="document_file" accept=".pdf" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm bg-white focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('document_file') border-red-500 @enderror">
                
                @if(isset($publication) && $publication->document_file)
                    <div class="mt-3 p-3 bg-blue-50 border border-blue-100 rounded-lg flex items-center justify-between">
                        <div class="flex items-center text-sm text-blue-800">
                            <i class="bi bi-file-earmark-pdf text-xl mr-2"></i>
                            <span class="font-medium truncate max-w-[200px]">{{ basename($publication->document_file) }}</span>
                        </div>
                        <a href="{{ asset('storage/' . $publication->document_file) }}" target="_blank" class="text-xs font-bold text-blue-600 hover:text-blue-800 bg-white px-3 py-1 rounded-md border border-blue-200 shadow-sm transition-all hover:shadow">Lihat File</a>
                    </div>
                @endif
                
                <p class="text-xs text-gray-400 mt-1.5">Max size: 10MB.</p>
                @error('document_file') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
            </div>
        </x-admin.form.card>
    </div>

    <div class="lg:col-span-4 space-y-6">
        <x-admin.form.publish-card :model="$publication" :statusOptions="['draft' => 'Draft', 'published' => 'Published']" />
        
        <x-admin.form.featured-image-card :model="$publication" fieldName="cover_file" title="Cover Image" />

        <x-admin.form.card title="Attributes" padding="p-6">
            <!-- Category -->
            <div class="mb-4">
                <label for="category" class="block text-sm font-semibold text-gray-700 mb-2">Category</label>
                <input type="text" name="category" id="category" value="{{ old('category', $publication->category ?? '') }}" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('category') border-red-500 @enderror" placeholder="e.g. Laporan Kinerja">
                @error('category') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Featured -->
            <div class="flex items-center justify-between p-4 border border-gray-100 rounded-xl bg-gray-50/50">
                <div>
                    <h4 class="text-sm font-semibold text-gray-900">Featured</h4>
                    <p class="text-xs text-gray-500 mt-0.5">Pin this to highlights.</p>
                </div>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="hidden" name="featured" value="0">
                    <input type="checkbox" name="featured" value="1" class="sr-only peer" @checked(old('featured', $publication->featured ?? false))>
                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary/20 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                </label>
            </div>
        </x-admin.form.card>
    </div>
</div>

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
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#content',
        height: 300,
        plugins: 'advlist autolink lists link charmap preview searchreplace visualblocks code fullscreen insertdatetime table wordcount',
        toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
        menubar: false,
        branding: false
    });
</script>
@endpush

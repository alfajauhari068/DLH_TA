<x-ui.card title="News Information" padding="p-6" class="mb-6 rounded-2xl shadow-sm border-gray-100">
    <div class="space-y-6">
        
        <!-- Title -->
        <div>
            <label for="title" class="block text-sm font-semibold text-gray-700 mb-2">Title</label>
            <input type="text" 
                   id="title" 
                   name="title" 
                   value="{{ old('title', $news->title ?? '') }}" 
                   class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('title') border-red-500 @enderror" 
                   placeholder="Enter news title" 
                   required>
            @error('title') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
        </div>

        <!-- Slug -->
        <div>
            <label for="slug" class="block text-sm font-semibold text-gray-700 mb-2">Slug</label>
            <div class="flex items-center">
                <span class="inline-flex items-center px-3 border border-r-0 border-gray-200 bg-gray-50 text-gray-500 text-sm rounded-l-xl h-[42px]">
                    /berita/
                </span>
                <input type="text" 
                       id="slug" 
                       name="slug" 
                       value="{{ old('slug', $news->slug ?? '') }}" 
                       class="flex-1 border border-gray-200 rounded-r-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('slug') border-red-500 @enderror" 
                       placeholder="auto-generated-slug">
            </div>
            <p class="text-xs text-gray-400 mt-1.5">The URL-friendly version of the title. Auto-generated if left blank.</p>
            @error('slug') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
        </div>

        <!-- Categories (Many-to-Many) -->
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Categories</label>
            <div class="space-y-2 border border-gray-200 rounded-xl p-4 bg-white max-h-48 overflow-y-auto">
                @if(isset($categories) && $categories->count() > 0)
                    @foreach($categories as $category)
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" name="category_ids[]" value="{{ $category->id }}"
                                class="rounded border-gray-300 text-primary focus:ring-primary"
                                @checked(is_array(old('category_ids')) ? in_array($category->id, old('category_ids')) : (isset($news) && $news->categories->contains($category->id)))>
                            <span class="text-sm text-gray-700">{{ $category->name }}</span>
                        </label>
                    @endforeach
                @else
                    <p class="text-sm text-gray-500">No categories available.</p>
                @endif
            </div>
            @error('category_ids') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
        </div>

        <!-- Summary -->
        <div>
            <label for="summary" class="block text-sm font-semibold text-gray-700 mb-2">Summary</label>
            <textarea id="summary" 
                      name="summary" 
                      rows="3" 
                      class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('summary') border-red-500 @enderror" 
                      placeholder="Brief excerpt or summary of the article">{{ old('summary', $news->summary ?? $news->excerpt ?? '') }}</textarea>
            <p class="text-xs text-gray-400 mt-1.5">A short summary that appears on the news listing cards.</p>
            @error('summary') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
        </div>

        <!-- Is Featured -->
        <div class="flex items-center justify-between p-4 border border-gray-100 rounded-xl bg-gray-50/50">
            <div>
                <h4 class="text-sm font-semibold text-gray-900">Featured Article</h4>
                <p class="text-xs text-gray-500 mt-0.5">Pin this article to the featured section on the homepage.</p>
            </div>
            <label class="relative inline-flex items-center cursor-pointer">
                <input type="hidden" name="is_featured" value="0">
                <input type="checkbox" name="is_featured" value="1" class="sr-only peer" @checked(old('is_featured', $news->is_featured ?? false))>
                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary/20 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
            </label>
        </div>

    </div>
</x-ui.card>

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

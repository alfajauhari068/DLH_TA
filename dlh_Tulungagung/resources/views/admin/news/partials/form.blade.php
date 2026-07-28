<div class="grid grid-cols-1 lg:grid-cols-12 gap-6 pb-8 relative" id="cms-editor-container">
    
    <!-- Left Column (Content) -->
    <div class="lg:col-span-8 space-y-6">
        
        <!-- Card 1: Article Information -->
        <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-center gap-2 mb-6">
                <i class="bi bi-info-circle text-green-600 text-lg"></i>
                <h3 class="text-lg font-bold text-gray-900">Article Information</h3>
            </div>
            
            <div class="space-y-5">
                <!-- Title -->
                <div>
                    <label for="title" class="block text-sm font-semibold text-gray-700 mb-2">Title</label>
                    <input type="text" id="title" name="title" value="{{ old('title', $news->title ?? '') }}" class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-green-500/20 focus:border-green-500 transition-all @error('title') border-red-500 @enderror" placeholder="Enter a catchy title..." required>
                    @error('title') <p class="text-xs text-red-500 mt-1"><i class="bi bi-exclamation-circle"></i> {{ $message }}</p> @enderror
                </div>

                <!-- Slug -->
                <div>
                    <label for="slug" class="block text-sm font-semibold text-gray-700 mb-2">Slug</label>
                    <div class="flex items-center rounded-xl border border-gray-200 focus-within:ring-2 focus-within:ring-green-500/20 focus-within:border-green-500 transition-all overflow-hidden bg-gray-50 @error('slug') border-red-500 @enderror">
                        <span class="pl-4 pr-2 py-3 text-gray-400 text-sm">/berita/</span>
                        <input type="text" id="slug" name="slug" value="{{ old('slug', $news->slug ?? '') }}" class="flex-1 bg-transparent px-2 py-3 text-sm text-gray-700 focus:outline-none" placeholder="auto-generated-slug">
                    </div>
                    @error('slug') <p class="text-xs text-red-500 mt-1"><i class="bi bi-exclamation-circle"></i> {{ $message }}</p> @enderror
                </div>

                <!-- Category -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Categories</label>
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 border border-gray-100 rounded-xl p-4 bg-gray-50/50">
                        @if(isset($categories) && $categories->count() > 0)
                            @foreach($categories as $category)
                                <label class="flex items-center gap-2 cursor-pointer group">
                                    <input type="checkbox" name="category_ids[]" value="{{ $category->id }}" class="rounded border-gray-300 text-green-600 focus:ring-green-500 w-4 h-4 transition-colors" @checked(is_array(old('category_ids')) ? in_array($category->id, old('category_ids')) : (isset($news) && $news->categories->contains($category->id)))>
                                    <span class="text-sm text-gray-700 group-hover:text-gray-900 transition-colors">{{ $category->name }}</span>
                                </label>
                            @endforeach
                        @else
                            <p class="text-sm text-gray-500 col-span-full">No categories available.</p>
                        @endif
                    </div>
                    @error('category_ids') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <!-- Featured Toggle -->
                <div class="flex items-center justify-between p-4 border border-green-100 rounded-xl bg-green-50/30">
                    <div class="flex items-start gap-3">
                        <div class="mt-0.5 p-1.5 bg-green-100 rounded-lg text-green-600"><i class="bi bi-star-fill text-sm"></i></div>
                        <div>
                            <h4 class="text-sm font-semibold text-gray-900">Featured Article</h4>
                            <p class="text-xs text-gray-500 mt-0.5">Highlight this article on the homepage.</p>
                        </div>
                    </div>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="hidden" name="is_featured" value="0">
                        <input type="checkbox" name="is_featured" value="1" class="sr-only peer" @checked(old('is_featured', $news->is_featured ?? false))>
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-green-500/20 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-green-600"></div>
                    </label>
                </div>
            </div>
        </div>

        <!-- Card 2: Content Editor -->
        <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm hover:shadow-md transition-shadow flex flex-col">
            <div class="flex items-center justify-between mb-4 border-b border-gray-100 pb-4">
                <div class="flex items-center gap-2">
                    <i class="bi bi-body-text text-green-600 text-lg"></i>
                    <h3 class="text-lg font-bold text-gray-900">Content Editor</h3>
                </div>
                <div class="flex items-center gap-4 text-xs font-medium text-gray-500">
                    <span id="save-indicator" class="flex items-center gap-1 text-green-600 opacity-0 transition-opacity"><i class="bi bi-cloud-check"></i> Saved</span>
                    <span class="flex items-center gap-1"><i class="bi bi-fonts"></i> <span id="word-count">0</span> words</span>
                    <span class="flex items-center gap-1"><i class="bi bi-clock"></i> <span id="reading-time">1</span> min read</span>
                </div>
            </div>
            
            <div class="flex-1 relative">
                <x-admin.form.tinymce-editor name="content" id="content" :value="old('content', $news->content ?? '')" placeholder="Craft your amazing story here..." />
            </div>
        </div>

        <!-- Card 3: SEO Settings -->
        <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-center gap-2 mb-6">
                <i class="bi bi-google text-green-600 text-lg"></i>
                <h3 class="text-lg font-bold text-gray-900">SEO Optimization</h3>
            </div>
            
            <div class="space-y-5">
                <div>
                    <label for="meta_title" class="block text-sm font-semibold text-gray-700 mb-2">Meta Title</label>
                    <input type="text" id="meta_title" name="meta_title" value="{{ old('meta_title', $news->meta_title ?? '') }}" class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-green-500/20 focus:border-green-500 transition-all" placeholder="Optional. Defaults to article title.">
                </div>
                
                <div>
                    <label for="meta_description" class="block text-sm font-semibold text-gray-700 mb-2">Meta Description (Summary)</label>
                    <textarea id="meta_description" name="summary" rows="3" class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-green-500/20 focus:border-green-500 transition-all" placeholder="Brief summary for search engines and social media...">{{ old('summary', $news->summary ?? $news->excerpt ?? '') }}</textarea>
                    <div class="flex justify-between items-center mt-1.5">
                        <p class="text-xs text-gray-400">Recommended length: 150-160 characters.</p>
                        <span class="text-xs text-gray-400 font-medium"><span id="meta-desc-count">0</span>/160</span>
                    </div>
                </div>

                <div>
                    <label for="keywords" class="block text-sm font-semibold text-gray-700 mb-2">Keywords</label>
                    <input type="text" id="keywords" name="keywords" value="{{ old('keywords', $news->keywords ?? '') }}" class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-green-500/20 focus:border-green-500 transition-all" placeholder="e.g. environment, tulungagung, nature">
                </div>
                
                <!-- Open Graph Preview -->
                <div class="mt-6 pt-6 border-t border-gray-100">
                    <h4 class="text-sm font-semibold text-gray-700 mb-3">Search Engine Preview</h4>
                    <div class="p-4 bg-gray-50 rounded-xl border border-gray-200">
                        <div class="text-blue-600 text-lg font-medium cursor-pointer hover:underline truncate" id="seo-preview-title">{{ $news->title ?? 'Article Title' }}</div>
                        <div class="text-green-700 text-sm truncate my-0.5" id="seo-preview-url">https://dlh.tulungagung.go.id/berita/<span id="seo-preview-slug">{{ $news->slug ?? 'slug' }}</span></div>
                        <div class="text-gray-600 text-sm line-clamp-2" id="seo-preview-desc">{{ $news->summary ?? 'This is how your article might appear in search engine results. Write a compelling summary to attract more readers.' }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Right Column (Sidebar) -->
    <div class="lg:col-span-4 space-y-6">
        
        <!-- Publish Card -->
        <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-center gap-2 mb-5">
                <i class="bi bi-send text-green-600 text-lg"></i>
                <h3 class="text-lg font-bold text-gray-900">Publish</h3>
            </div>
            
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <span class="text-sm font-semibold text-gray-700"><i class="bi bi-flag text-gray-400 mr-2"></i>Status</span>
                    <select name="status" class="bg-gray-50 border border-gray-200 rounded-lg px-3 py-1.5 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-green-500/20 focus:border-green-500 transition-colors cursor-pointer">
                        <option value="draft" @selected(old('status', $news->status ?? null) == 'draft')>Draft</option>
                        <option value="published" @selected(old('status', $news->status ?? null) == 'published')>Published</option>
                        <option value="archived" @selected(old('status', $news->status ?? null) == 'archived')>Archived</option>
                    </select>
                </div>

                <div class="flex items-center justify-between">
                    <span class="text-sm font-semibold text-gray-700"><i class="bi bi-eye text-gray-400 mr-2"></i>Visibility</span>
                    <span class="text-sm text-green-600 font-medium">Public</span>
                </div>
                
                <div class="flex flex-col gap-2 pt-2">
                    <label class="text-sm font-semibold text-gray-700"><i class="bi bi-calendar-event text-gray-400 mr-2"></i>Schedule Publish</label>
                    <input type="datetime-local" name="published_at" value="{{ old('published_at', optional($news->published_at ?? null)->format('Y-m-d\TH:i') ?? '') }}" class="w-full border border-gray-200 rounded-xl px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-green-500/20 focus:border-green-500 transition-all bg-gray-50">
                </div>
            </div>
        </div>

        <!-- Featured Image Card -->
        <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center gap-2">
                    <i class="bi bi-image text-green-600 text-lg"></i>
                    <h3 class="text-lg font-bold text-gray-900">Featured Image</h3>
                </div>
            </div>
            
            <div class="space-y-4">
                <div id="image-preview-container" class="relative {{ (!isset($news) || !$news->featured_image) ? 'hidden' : '' }}">
                    <img id="image-preview" src="{{ isset($news) && $news->featured_image ? asset('storage/' . $news->featured_image) : '' }}" class="w-full h-48 object-cover rounded-xl border border-gray-200">
                    <div class="absolute inset-0 bg-black/40 opacity-0 hover:opacity-100 transition-opacity rounded-xl flex items-center justify-center gap-2 backdrop-blur-sm">
                        <label for="featured_image" class="cursor-pointer p-2 bg-white rounded-lg shadow hover:bg-gray-50 text-gray-700 tooltip" title="Replace">
                            <i class="bi bi-arrow-repeat text-lg"></i>
                        </label>
                        <button type="button" id="remove-image-btn" class="p-2 bg-red-500 text-white rounded-lg shadow hover:bg-red-600 tooltip" title="Remove">
                            <i class="bi bi-trash3 text-lg"></i>
                        </button>
                    </div>
                </div>

                <div id="image-upload-container" class="{{ (isset($news) && $news->featured_image) ? 'hidden' : '' }}">
                    <label for="featured_image" class="flex flex-col items-center justify-center w-full h-48 border-2 border-gray-200 border-dashed rounded-xl cursor-pointer bg-gray-50 hover:bg-green-50/50 hover:border-green-400 transition-colors group">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <i class="bi bi-cloud-arrow-up text-3xl text-gray-400 group-hover:text-green-500 mb-3 transition-colors"></i>
                            <p class="mb-1 text-sm text-gray-600 font-semibold">Click to upload or drag & drop</p>
                            <p class="text-xs text-gray-500">SVG, PNG, JPG or GIF (MAX. 2MB)</p>
                        </div>
                    </label>
                </div>
                <input id="featured_image" name="featured_image" type="file" class="hidden" accept="image/*" />
                @error('featured_image') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
            </div>
        </div>

        @if(isset($news->id))
        <!-- Article Information Card -->
        <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-center gap-2 mb-5">
                <i class="bi bi-file-text text-green-600 text-lg"></i>
                <h3 class="text-lg font-bold text-gray-900">Details</h3>
            </div>
            
            <div class="space-y-3">
                <div class="flex justify-between items-center text-sm border-b border-gray-50 pb-2">
                    <span class="text-gray-500">Author</span>
                    <span class="font-medium text-gray-900">{{ $news->author->name ?? auth()->user()->name ?? 'Admin' }}</span>
                </div>
                <div class="flex justify-between items-center text-sm border-b border-gray-50 pb-2">
                    <span class="text-gray-500">Created</span>
                    <span class="font-medium text-gray-900">{{ $news->created_at->format('M d, Y') }}</span>
                </div>
                <div class="flex justify-between items-center text-sm border-b border-gray-50 pb-2">
                    <span class="text-gray-500">Last Updated</span>
                    <span class="font-medium text-gray-900">{{ $news->updated_at->format('M d, Y H:i') }}</span>
                </div>
                <div class="flex justify-between items-center text-sm border-b border-gray-50 pb-2">
                    <span class="text-gray-500">Views</span>
                    <span class="font-medium text-gray-900">{{ $news->views ?? 0 }}</span>
                </div>
                <div class="flex justify-between items-center text-sm pt-1">
                    <span class="text-gray-500">Revisions</span>
                    <span class="font-medium text-gray-900 text-xs bg-gray-100 px-2 py-0.5 rounded-full">v1.2</span>
                </div>
            </div>
        </div>
        @endif

    </div>

    <!-- Sticky Bottom Action Bar -->
    <div class="fixed bottom-6 left-1/2 transform -translate-x-1/2 w-[90%] max-w-4xl z-40 bg-white/90 backdrop-blur-md border border-gray-200/50 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.12)] p-4 flex justify-between items-center transition-all duration-300">
        <div class="flex items-center gap-2">
            <a href="{{ url()->previous() }}" class="px-5 py-2.5 bg-gray-100 text-gray-700 text-sm font-semibold rounded-xl hover:bg-gray-200 hover:text-gray-900 transition-colors focus:ring-2 focus:ring-gray-300">
                Cancel
            </a>
            <button type="button" onclick="alert('Preview mode opening...')" class="hidden sm:block px-5 py-2.5 bg-white border border-gray-200 text-gray-700 text-sm font-semibold rounded-xl hover:bg-gray-50 transition-colors focus:ring-2 focus:ring-gray-300">
                <i class="bi bi-eye mr-1"></i> Preview
            </button>
        </div>
        
        <div class="flex items-center gap-3">
            <button type="button" onclick="document.querySelector('select[name=status]').value='draft'; document.querySelector('form').submit();" class="px-5 py-2.5 bg-yellow-100 text-yellow-800 text-sm font-semibold rounded-xl hover:bg-yellow-200 transition-colors focus:ring-2 focus:ring-yellow-300">
                Save Draft
            </button>
            <button type="submit" class="px-6 py-2.5 bg-green-600 text-white text-sm font-bold rounded-xl hover:bg-green-700 hover:shadow-lg hover:-translate-y-0.5 transition-all focus:ring-2 focus:ring-offset-2 focus:ring-green-500 flex items-center gap-2">
                <i class="bi bi-check-circle"></i> {{ isset($news->id) ? 'Update Article' : 'Publish Article' }}
            </button>
        </div>
    </div>

</div>

<!-- Scripts -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Slug Auto-generation
    const titleInput = document.getElementById('title');
    const slugInput = document.getElementById('slug');
    const seoPreviewTitle = document.getElementById('seo-preview-title');
    const seoPreviewSlug = document.getElementById('seo-preview-slug');
    let isSlugManual = !!slugInput.value;

    slugInput.addEventListener('input', () => isSlugManual = true);

    titleInput.addEventListener('keyup', function() {
        if (!isSlugManual) {
            const slug = titleInput.value.toLowerCase().replace(/[^a-z0-9\s-]/g, '').replace(/[\s-]+/g, '-').replace(/^-+|-+$/g, '');
            slugInput.value = slug;
            if(seoPreviewSlug) seoPreviewSlug.innerText = slug || 'slug';
        }
        if(seoPreviewTitle) seoPreviewTitle.innerText = titleInput.value || 'Article Title';
    });

    // Image Upload Preview
    const fileInput = document.getElementById('featured_image');
    const previewContainer = document.getElementById('image-preview-container');
    const uploadContainer = document.getElementById('image-upload-container');
    const previewImage = document.getElementById('image-preview');
    const removeBtn = document.getElementById('remove-image-btn');

    fileInput.addEventListener('change', function() {
        if (this.files && this.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                previewImage.src = e.target.result;
                uploadContainer.classList.add('hidden');
                previewContainer.classList.remove('hidden');
            }
            reader.readAsDataURL(this.files[0]);
        }
    });

    removeBtn.addEventListener('click', function() {
        fileInput.value = '';
        previewImage.src = '';
        previewContainer.classList.add('hidden');
        uploadContainer.classList.remove('hidden');
    });

    // Meta Description Counter & Preview
    const metaDesc = document.getElementById('meta_description');
    const metaCount = document.getElementById('meta-desc-count');
    const seoPreviewDesc = document.getElementById('seo-preview-desc');
    
    if(metaDesc && metaCount) {
        metaDesc.addEventListener('input', function() {
            metaCount.innerText = this.value.length;
            if(seoPreviewDesc) seoPreviewDesc.innerText = this.value || 'This is how your article might appear in search engine results. Write a compelling summary to attract more readers.';
        });
        metaCount.innerText = metaDesc.value.length;
    }
    
    // Unsaved changes warning
    let isFormDirty = false;
    const form = document.querySelector('form');
    
    form.addEventListener('input', () => isFormDirty = true);
    form.addEventListener('submit', () => isFormDirty = false);
    
    window.addEventListener('beforeunload', function (e) {
        if (isFormDirty) {
            e.preventDefault();
            e.returnValue = '';
        }
    });
});
</script>

@props(['model' => null])

<x-ui.card title="SEO Settings" padding="p-6" class="rounded-2xl shadow-sm border-gray-100">
    <div class="space-y-5">
        
        <!-- Meta Title -->
        <div>
            <label for="seo_title" class="block text-sm font-semibold text-gray-700 mb-2">Meta Title</label>
            <input type="text" 
                   id="seo_title" 
                   name="seo_title" 
                   value="{{ old('seo_title', $model->seo_title ?? '') }}" 
                   class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('seo_title') border-red-500 @enderror" 
                   placeholder="Leave blank to use article title">
            @error('seo_title') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
        </div>

        <!-- Meta Description -->
        <div>
            <div class="flex justify-between mb-2">
                <label for="seo_description" class="block text-sm font-semibold text-gray-700">Meta Description</label>
                <span id="desc-counter" class="text-xs text-gray-400">0/160</span>
            </div>
            <textarea id="seo_description" 
                      name="seo_description" 
                      rows="3" 
                      class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('seo_description') border-red-500 @enderror" 
                      placeholder="Brief description for search engines...">{{ old('seo_description', $model->seo_description ?? '') }}</textarea>
            @error('seo_description') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
        </div>

        <!-- Meta Keywords -->
        <div>
            <label for="seo_keywords" class="block text-sm font-semibold text-gray-700 mb-2">Keywords</label>
            <input type="text" 
                   id="seo_keywords" 
                   name="seo_keywords" 
                   value="{{ old('seo_keywords', $model->seo_keywords ?? '') }}" 
                   class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('seo_keywords') border-red-500 @enderror" 
                   placeholder="environment, green, policy (comma separated)">
            @error('seo_keywords') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
        </div>
        
        <!-- Canonical URL -->
        <div>
            <label for="canonical_url" class="block text-sm font-semibold text-gray-700 mb-2">Canonical URL</label>
            <input type="text" 
                   id="canonical_url" 
                   name="canonical_url" 
                   value="{{ old('canonical_url', $model->canonical_url ?? '') }}" 
                   class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all @error('canonical_url') border-red-500 @enderror" 
                   placeholder="https://example.com/original-article">
            <p class="text-xs text-gray-400 mt-1.5">Optional. Leave blank to self-reference.</p>
            @error('canonical_url') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
        </div>

        <!-- SEO Preview Placeholder -->
        <div class="mt-4 p-4 border border-gray-100 rounded-xl bg-white shadow-sm">
            <h5 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Search Engine Preview</h5>
            <div class="truncate text-lg text-[#1a0dab] font-medium" id="preview-title">
                {{ old('seo_title', $model->seo_title ?? $model->title ?? 'Article Title Example') }}
            </div>
            <div class="text-[13px] text-[#006621] mb-1">dlhtulungagung.go.id > ... > <span id="preview-slug">slug</span></div>
            <div class="text-[13px] text-[#545454] leading-snug line-clamp-2" id="preview-desc">
                {{ old('seo_description', $model->seo_description ?? 'This is how your article will appear in search engine results. Write a compelling description to improve click-through rates.') }}
            </div>
        </div>

    </div>
</x-ui.card>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const descInput = document.getElementById('seo_description');
    const descCounter = document.getElementById('desc-counter');
    const titleInput = document.getElementById('title');
    const seoTitleInput = document.getElementById('seo_title');
    const slugInput = document.getElementById('slug');
    
    const previewTitle = document.getElementById('preview-title');
    const previewSlug = document.getElementById('preview-slug');
    const previewDesc = document.getElementById('preview-desc');

    // Update Counter
    function updateCounter() {
        if(!descInput || !descCounter) return;
        const length = descInput.value.length;
        descCounter.textContent = `${length}/160`;
        if (length > 160) {
            descCounter.classList.add('text-danger');
            descCounter.classList.remove('text-gray-400');
        } else {
            descCounter.classList.remove('text-danger');
            descCounter.classList.add('text-gray-400');
        }
    }

    if(descInput) {
        descInput.addEventListener('input', () => {
            updateCounter();
            previewDesc.textContent = descInput.value || 'This is how your article will appear in search engine results...';
        });
        updateCounter();
    }

    if(seoTitleInput && titleInput) {
        const updatePreviewTitle = () => {
            previewTitle.textContent = seoTitleInput.value || titleInput.value || 'Article Title Example';
        };
        seoTitleInput.addEventListener('input', updatePreviewTitle);
        titleInput.addEventListener('input', updatePreviewTitle);
    }

    if(slugInput) {
        slugInput.addEventListener('input', () => {
            previewSlug.textContent = slugInput.value || 'slug';
        });
        // Initial setup
        previewSlug.textContent = slugInput.value || 'slug';
    }
});
</script>

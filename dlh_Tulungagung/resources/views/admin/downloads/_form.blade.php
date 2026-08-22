<div class="space-y-4">
    <div>
        <label class="block">Title</label>
        <input type="text" name="title" value="{{ old('title', $download->title ?? '') }}" class="w-full border p-2" />
        @error('title') <div class="text-red-600">{{ $message }}</div> @enderror
    </div>

    <div>
        <label class="block">Slug</label>
        <input type="text" name="slug" value="{{ old('slug', $download->slug ?? '') }}" class="w-full border p-2" />
        @error('slug') <div class="text-red-600">{{ $message }}</div> @enderror
    </div>

    <div>
        <label class="block">Summary</label>
        <textarea name="summary" class="w-full border p-2">{{ old('summary', $download->summary ?? '') }}</textarea>
        @error('summary') <div class="text-red-600">{{ $message }}</div> @enderror
    </div>

    <div>
        <label class="block">Content</label>
        <textarea name="content" class="w-full border p-2" rows="6">{{ old('content', $download->content ?? '') }}</textarea>
        @error('content') <div class="text-red-600">{{ $message }}</div> @enderror
    </div>

    <div>
        <label class="block">Category</label>
        <input type="text" name="category" value="{{ old('category', $download->category ?? '') }}" class="w-full border p-2" />
        @error('category') <div class="text-red-600">{{ $message }}</div> @enderror
    </div>

    <div>
        <label class="block">Attachment</label>
        <input type="file" name="attachment" />
        @error('attachment') <div class="text-red-600">{{ $message }}</div> @enderror
    </div>

    <div>
        <label class="block">Status</label>
        <select name="status" class="border p-2 w-full">
            <option value="draft" @selected(old('status', $download->status ?? 'draft') === 'draft')>Draft</option>
            <option value="published" @selected(old('status', $download->status ?? 'draft') === 'published')>Published</option>
        </select>
        @error('status') <div class="text-red-600">{{ $message }}</div> @enderror
    </div>

    <div>
        <label class="block">Published At</label>
        <input type="datetime-local" name="published_at" value="{{ old('published_at', optional($download->published_at)->format('Y-m-d\TH:i') ?? '') }}" class="border p-2 w-full" />
        @error('published_at') <div class="text-red-600">{{ $message }}</div> @enderror
    </div>

    <div>
        <label class="inline-flex items-center gap-2">
            <input type="checkbox" name="featured" value="1" @checked(old('featured', $download->featured ?? false)) />
            <span>Featured</span>
        </label>
        @error('featured') <div class="text-red-600">{{ $message }}</div> @enderror
    </div>

    <x-admin.crud.form-actions />
</div>

<div class="space-y-4">
    <div>
        <label class="block">Title</label>
        <input type="text" name="title" value="{{ old('title', $publication->title ?? '') }}" class="w-full border p-2" />
        @error('title') <div class="text-red-600">{{ $message }}</div> @enderror
    </div>

    <div>
        <label class="block">Slug</label>
        <input type="text" name="slug" value="{{ old('slug', $publication->slug ?? '') }}" class="w-full border p-2" />
        @error('slug') <div class="text-red-600">{{ $message }}</div> @enderror
    </div>

    <div>
        <label class="block">Summary</label>
        <textarea name="summary" class="w-full border p-2">{{ old('summary', $publication->summary ?? '') }}</textarea>
        @error('summary') <div class="text-red-600">{{ $message }}</div> @enderror
    </div>

    <div>
        <label class="block">Content</label>
        <textarea name="content" class="w-full border p-2" rows="8">{{ old('content', $publication->content ?? '') }}</textarea>
        @error('content') <div class="text-red-600">{{ $message }}</div> @enderror
    </div>

    <div>
        <label class="block">Category</label>
        <input type="text" name="category" value="{{ old('category', $publication->category ?? '') }}" class="w-full border p-2" />
        @error('category') <div class="text-red-600">{{ $message }}</div> @enderror
    </div>

    <div>
        <label class="block">Cover File</label>
        <input type="file" name="cover_file" />
        @error('cover_file') <div class="text-red-600">{{ $message }}</div> @enderror
    </div>

    <div>
        <label class="block">Document File</label>
        <input type="file" name="document_file" />
        @error('document_file') <div class="text-red-600">{{ $message }}</div> @enderror
    </div>

    <div>
        <label class="block">Featured</label>
        <input type="checkbox" name="featured" value="1" @checked(old('featured', $publication->featured ?? false)) />
        @error('featured') <div class="text-red-600">{{ $message }}</div> @enderror
    </div>

    <div>
        <label class="block">Status</label>
        <select name="status" class="border p-2">
            <option value="draft" @selected(old('status', $publication->status ?? 'draft') === 'draft')>Draft</option>
            <option value="published" @selected(old('status', $publication->status ?? 'draft') === 'published')>Published</option>
        </select>
        @error('status') <div class="text-red-600">{{ $message }}</div> @enderror
    </div>

    <div>
        <label class="block">Published At</label>
        <input type="datetime-local" name="published_at" value="{{ old('published_at', optional($publication->published_at)->format('Y-m-d\TH:i') ?? '') }}" class="border p-2" />
        @error('published_at') <div class="text-red-600">{{ $message }}</div> @enderror
    </div>

    <x-admin.crud.form-actions />
</div>

<div class="space-y-4">
    <div>
        <label class="block">Title</label>
        <input type="text" name="title" value="{{ old('title', $news->title ?? '') }}" class="w-full border p-2" />
        @error('title') <div class="text-red-600">{{ $message }}</div> @enderror
    </div>

    <div>
        <label class="block">Slug</label>
        <input type="text" name="slug" value="{{ old('slug', $news->slug ?? '') }}" class="w-full border p-2" />
        @error('slug') <div class="text-red-600">{{ $message }}</div> @enderror
    </div>

    <div>
        <label class="block">Excerpt</label>
        <textarea name="excerpt" class="w-full border p-2">{{ old('excerpt', $news->excerpt ?? '') }}</textarea>
        @error('excerpt') <div class="text-red-600">{{ $message }}</div> @enderror
    </div>

    <div>
        <label class="block">Content</label>
        <textarea name="content" class="w-full border p-2" rows="10">{{ old('content', $news->content ?? '') }}</textarea>
        @error('content') <div class="text-red-600">{{ $message }}</div> @enderror
    </div>

    <div>
        <label class="block">Thumbnail</label>
        <input type="file" name="thumbnail" />
        @error('thumbnail') <div class="text-red-600">{{ $message }}</div> @enderror
    </div>

    <div>
        <label class="block">Status</label>
        <select name="status" class="border p-2">
            @foreach(config('cms.status') as $key => $val)
                <option value="{{ $val }}" @selected(old('status', $news->status ?? null) == $val)>{{ ucfirst($key) }}</option>
            @endforeach
        </select>
        @error('status') <div class="text-red-600">{{ $message }}</div> @enderror
    </div>

    <div>
        <label class="block">Published At</label>
        <input type="datetime-local" name="published_at" value="{{ old('published_at', optional($news->published_at)->format('Y-m-d\TH:i') ?? '') }}" class="border p-2" />
        @error('published_at') <div class="text-red-600">{{ $message }}</div> @enderror
    </div>

    <x-admin.crud.form-actions />
</div>

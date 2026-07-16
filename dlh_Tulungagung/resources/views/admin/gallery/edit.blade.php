@extends('layouts.admin')

@section('content')
<div class="max-w-4xl mx-auto bg-white rounded-xl border border-gray-200 shadow-sm p-6">
    <h2 class="text-xl font-semibold text-gray-900">Edit Gallery</h2>
    <form action="{{ route('admin.galleries.update', $gallery) }}" method="POST" enctype="multipart/form-data" class="mt-6 space-y-5">
        @csrf
        @method('PUT')
        <div>
            <label class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" name="title" value="{{ old('title', $gallery->title) }}" class="mt-1 w-full rounded-md border-gray-300 shadow-sm" required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Slug</label>
            <input type="text" name="slug" value="{{ old('slug', $gallery->slug) }}" class="mt-1 w-full rounded-md border-gray-300 shadow-sm">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Description</label>
            <textarea name="description" rows="4" class="mt-1 w-full rounded-md border-gray-300 shadow-sm">{{ old('description', $gallery->description) }}</textarea>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">Thumbnail</label>
                <input type="file" name="thumbnail" class="mt-1 w-full rounded-md border-gray-300 shadow-sm">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Image</label>
                <input type="file" name="image" class="mt-1 w-full rounded-md border-gray-300 shadow-sm">
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">Status</label>
                <select name="status" class="mt-1 w-full rounded-md border-gray-300 shadow-sm">
                    <option value="0" @selected((int) old('status', $gallery->status) === 0)>Draft</option>
                    <option value="1" @selected((int) old('status', $gallery->status) === 1)>Published</option>
                    <option value="2" @selected((int) old('status', $gallery->status) === 2)>Archived</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Sort Order</label>
                <input type="number" name="sort_order" value="{{ old('sort_order', $gallery->sort_order) }}" class="mt-1 w-full rounded-md border-gray-300 shadow-sm">
            </div>
        </div>
        <div class="flex justify-end gap-3">
            <a href="{{ route('admin.galleries.index') }}" class="px-4 py-2 rounded-md border border-gray-300 text-gray-700">Cancel</a>
            <button type="submit" class="px-4 py-2 rounded-md bg-indigo-600 text-white">Save</button>
        </div>
    </form>
</div>
@endsection

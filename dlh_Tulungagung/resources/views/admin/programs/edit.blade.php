@extends('layouts.admin')

@section('title', 'Edit Program')
@section('subtitle', 'Update this program entry.')

@section('content')
    <x-admin.card title="Program details">
        <form action="{{ route('admin.programs.update', $program) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $program->title) }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Slug</label>
                <input type="text" name="slug" class="form-control" value="{{ old('slug', $program->slug) }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Excerpt</label>
                <textarea name="excerpt" class="form-control">{{ old('excerpt', $program->excerpt) }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Content</label>
                <textarea name="content" class="form-control" rows="6">{{ old('content', $program->content) }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Featured Image</label>
                <input type="file" name="featured_image" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Status</label>
                <select name="status" class="form-select">
                    <option value="draft" @selected(old('status', $program->status) === 'draft')>Draft</option>
                    <option value="published" @selected(old('status', $program->status) === 'published')>Published</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Published At</label>
                <input type="datetime-local" name="published_at" class="form-control" value="{{ old('published_at', optional($program->published_at)->format('Y-m-d\TH:i')) }}">
            </div>
            <x-admin.crud.form-actions :cancelRoute="route('admin.programs.index')" />
        </form>
    </x-admin.card>
@endsection

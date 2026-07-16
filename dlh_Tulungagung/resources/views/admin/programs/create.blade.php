@extends('layouts.admin')

@section('title', 'Create Program')
@section('subtitle', 'Create a new public program entry.')

@section('content')
    <x-admin.card title="Program details">
        <form action="{{ route('admin.programs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Slug</label>
                <input type="text" name="slug" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Excerpt</label>
                <textarea name="excerpt" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Content</label>
                <textarea name="content" class="form-control" rows="6"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Featured Image</label>
                <input type="file" name="featured_image" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Status</label>
                <select name="status" class="form-select">
                    <option value="draft">Draft</option>
                    <option value="published">Published</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Published At</label>
                <input type="datetime-local" name="published_at" class="form-control">
            </div>
            <x-admin.crud.form-actions :cancelRoute="route('admin.programs.index')" />
        </form>
    </x-admin.card>
@endsection

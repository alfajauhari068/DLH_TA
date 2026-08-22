@extends('layouts.admin')

@section('content')
<div class="max-w-4xl mx-auto bg-white rounded-xl border border-gray-200 shadow-sm p-6">
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-xl font-semibold text-gray-900">{{ $gallery->title }}</h2>
            <p class="mt-1 text-sm text-gray-500">{{ $gallery->slug }}</p>
        </div>
        <a href="{{ route('admin.galleries.edit', $gallery) }}" class="px-4 py-2 rounded-md bg-indigo-600 text-white">Edit</a>
    </div>
    <div class="mt-6 space-y-4 text-sm text-gray-700">
        <div><strong>Description:</strong> {{ $gallery->description }}</div>
        <div><strong>Status:</strong> {{ $gallery->status }}</div>
        <div><strong>Published At:</strong> {{ optional($gallery->published_at)->format('Y-m-d H:i') }}</div>
    </div>
</div>
@endsection

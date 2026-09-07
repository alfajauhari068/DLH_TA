@extends('layouts.admin')

@section('content')
<div class="max-w-4xl mx-auto bg-white rounded-xl border border-gray-200 shadow-sm p-6">
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-xl font-semibold text-gray-900">{{ $gallery->title }}</h2>
            <p class="mt-1 text-sm text-gray-500">{{ $gallery->slug }}</p>
        </div>
        <div class="flex items-center gap-2">
            <a href="{{ route('admin.galleries.edit', $gallery) }}" class="px-4 py-2 rounded-md bg-indigo-600 text-white">Edit</a>
            <form action="{{ route('admin.galleries.destroy', $gallery) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus galeri ini?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-4 py-2 rounded-md bg-red-600 text-white hover:bg-red-700" title="Delete gallery">
                    <i class="bi bi-trash3 mr-1"></i> Delete Gallery
                </button>
            </form>
        </div>
    </div>
    <div class="mt-6 space-y-4 text-sm text-gray-700">
        <div><strong>Description:</strong> {{ $gallery->description }}</div>
        <div><strong>Status:</strong> {{ $gallery->status }}</div>
        <div><strong>Published At:</strong> {{ optional($gallery->published_at)->format('Y-m-d H:i') }}</div>
    </div>

    <div class="mt-8">
        <h3 class="text-lg font-semibold text-gray-900">Gallery Images</h3>
        @if($gallery->items->isEmpty())
            <p class="mt-3 text-sm text-gray-500">No images in this gallery.</p>
        @else
            <div class="mt-4 grid grid-cols-2 md:grid-cols-3 gap-4">
                @foreach($gallery->items as $item)
                    <div class="border border-gray-200 rounded-xl overflow-hidden bg-gray-50">
                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->caption ?: 'Gallery image' }}" class="w-full aspect-square object-cover">
                        <div class="p-3">
                            <p class="text-xs text-gray-500 truncate mb-3" title="{{ $item->caption }}">{{ $item->caption ?: 'Gallery image' }}</p>
                            <form action="{{ route('admin.galleries.images.destroy', [$gallery, $item]) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus image ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="w-full inline-flex justify-center items-center gap-1.5 py-2 px-3 bg-red-50 text-red-600 text-sm font-semibold rounded-lg hover:bg-red-100 transition-colors" title="Delete image">
                                    <i class="bi bi-trash3"></i>
                                    Delete Image
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
@endsection

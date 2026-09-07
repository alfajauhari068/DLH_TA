@extends('layouts.admin')

@section('content')
<div class="mb-6 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
    <div>
        <div class="text-sm text-gray-500 mb-2">
            <a href="{{ route('dashboard') }}" class="hover:text-green-600">Dashboard</a> / 
            <a href="{{ route('admin.news.index') }}" class="hover:text-green-600">News</a> / 
            <span class="text-gray-700 font-medium">Detail</span>
        </div>
        <h1 class="text-2xl font-bold text-gray-900">{{ $news->title }}</h1>
    </div>
    <div class="flex items-center gap-2">
        <a href="{{ route('news.detail', $news->slug) }}" target="_blank" class="px-4 py-2 bg-white border border-gray-200 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors flex items-center gap-2 text-sm font-medium">
            <i class="bi bi-box-arrow-up-right"></i> Pratinjau Publik
        </a>
        <a href="{{ route('admin.news.edit', $news) }}" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors flex items-center gap-2 text-sm font-medium shadow-sm">
            <i class="bi bi-pencil-square"></i> Edit Berita
        </a>
        <form action="{{ route('admin.news.destroy', $news) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus berita ini?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors flex items-center gap-2 text-sm font-medium shadow-sm" title="Hapus berita">
                <i class="bi bi-trash3"></i> Hapus Berita
            </button>
        </form>
        <a href="{{ route('admin.news.index') }}" class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors flex items-center gap-2 text-sm font-medium">
            <i class="bi bi-arrow-left"></i> Kembali
        </a>
    </div>
</div>

<div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden mb-8">
    <div class="p-6 md:p-8">
        @if($news->featured_image)
            <img src="{{ $news->image_url }}" alt="{{ $news->title }}" class="w-full h-auto max-h-[500px] object-cover rounded-xl mb-8 border border-gray-100 shadow-sm">
        @endif
        
        <div class="prose max-w-none text-gray-700 mb-8">
            <p class="text-lg font-medium text-gray-900 mb-6">{{ $news->summary ?? $news->excerpt }}</p>
            {!! $news->content !!}
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 pt-6 border-t border-gray-100 mt-8">
            <div>
                <span class="block text-sm font-medium text-gray-500 mb-1">Kategori</span>
                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-green-50 text-green-700 border border-green-200">
                    {{ $news->category_name }}
                </span>
            </div>
            <div>
                <span class="block text-sm font-medium text-gray-500 mb-1">Status</span>
                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium {{ $news->status === 'published' ? 'bg-blue-50 text-blue-700 border-blue-200' : 'bg-gray-50 text-gray-700 border-gray-200' }}">
                    {{ ucfirst(array_search($news->status, config('cms.status') ?? []) ?: $news->status) }}
                </span>
            </div>
            <div>
                <span class="block text-sm font-medium text-gray-500 mb-1">Penulis</span>
                <span class="text-gray-900 font-medium">{{ optional($news->author)->name ?? 'Admin' }}</span>
            </div>
            <div>
                <span class="block text-sm font-medium text-gray-500 mb-1">Diterbitkan Pada</span>
                <span class="text-gray-900 font-medium">{{ $news->published_at ? \Carbon\Carbon::parse($news->published_at)->format('d M Y, H:i') : '-' }}</span>
            </div>
        </div>
    </div>
</div>
@endsection

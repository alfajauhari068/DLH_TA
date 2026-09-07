@extends('layouts.admin')

@section('content')
<div class="space-y-6">
    <!-- Breadcrumb -->
    <div class="flex items-center gap-2 text-sm text-gray-500">
        <a href="{{ route('admin.publications.index') }}" class="hover:text-primary transition-colors">Publications</a>
        <i class="bi bi-chevron-right text-[10px]"></i>
        <span class="text-gray-900 font-medium truncate max-w-xs">{{ $publication->title }}</span>
    </div>

    <!-- Hero Section -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden relative">
        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-green-500 to-emerald-400"></div>
        <div class="p-8 md:p-10 flex flex-col md:flex-row md:items-start justify-between gap-8">
            <div class="flex-1 space-y-4">
                <div class="flex flex-wrap items-center gap-3">
                    <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-xs font-semibold uppercase tracking-wider">
                        {{ $publication->category ?? 'General' }}
                    </span>
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="bi bi-calendar3 mr-1.5"></i>
                        {{ $publication->published_at ? \Carbon\Carbon::parse($publication->published_at)->format('d M Y') : 'Unpublished' }}
                    </div>
                </div>
                
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 leading-tight">
                    {{ $publication->title }}
                </h1>
                
                @if($publication->summary)
                <p class="text-lg text-gray-600 leading-relaxed max-w-3xl">
                    {{ $publication->summary }}
                </p>
                @endif
            </div>

            <div class="flex flex-col gap-3 min-w-[200px]">
                @if($publication->document_file && !str_contains($publication->document_file, '.tmp') && !str_contains($publication->document_file, 'php'))
                <a href="{{ Storage::url($publication->document_file) }}" target="_blank" class="flex items-center justify-center gap-2 px-6 py-3 bg-primary hover:bg-primary-dark text-white rounded-xl font-semibold shadow-sm shadow-primary/20 hover:shadow-md transition-all group">
                    <i class="bi bi-cloud-arrow-down text-xl group-hover:-translate-y-0.5 transition-transform"></i>
                    Download PDF
                </a>
                @endif
                <a href="{{ route('admin.publications.edit', $publication) }}" class="flex items-center justify-center gap-2 px-6 py-3 bg-gray-50 hover:bg-gray-100 text-gray-700 rounded-xl font-semibold border border-gray-200 transition-all">
                    <i class="bi bi-pencil-square"></i>
                    Edit Document
                </a>
                <form action="{{ route('admin.publications.destroy', $publication) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus publikasi ini?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="w-full flex items-center justify-center gap-2 px-6 py-3 bg-red-600 hover:bg-red-700 text-white rounded-xl font-semibold shadow-sm transition-all" title="Hapus publikasi">
                        <i class="bi bi-trash3"></i>
                        Hapus Publikasi
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Main Content Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
        
        <!-- Left: Rich Text Content -->
        <div class="lg:col-span-8">
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 md:p-10 prose prose-lg prose-green max-w-none">
                {!! $publication->content !!}
            </div>
        </div>

        <!-- Right: Sidebar (Cover & Preview) -->
        <div class="lg:col-span-4 space-y-6">
            @php
                $imageUrl = null;
                $isValidPath = function($path) {
                    return !empty($path) && !str_contains($path, '.tmp') && !str_contains($path, 'php');
                };
                if ($isValidPath($publication->cover_file)) {
                    $imageUrl = Storage::url($publication->cover_file);
                } elseif ($isValidPath($publication->thumbnail)) {
                    $imageUrl = Storage::url($publication->thumbnail);
                } elseif ($isValidPath($publication->cover_image)) {
                    $imageUrl = Storage::url($publication->cover_image);
                }
            @endphp

            @if($imageUrl)
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                <h3 class="text-sm font-bold text-gray-900 mb-4 uppercase tracking-wider">Cover Image</h3>
                <div class="rounded-xl overflow-hidden bg-gray-50 border border-gray-100 aspect-[3/4]">
                    <img src="{{ $imageUrl }}" alt="{{ $publication->title }}" class="w-full h-full object-cover">
                </div>
            </div>
            @endif

            @if($publication->document_file && !str_contains($publication->document_file, '.tmp') && !str_contains($publication->document_file, 'php'))
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                <h3 class="text-sm font-bold text-gray-900 mb-4 uppercase tracking-wider">Document Preview</h3>
                <div class="rounded-xl overflow-hidden border border-gray-200 bg-gray-50 h-[500px]">
                    <iframe src="{{ Storage::url($publication->document_file) }}" class="w-full h-full" title="PDF Preview"></iframe>
                </div>
            </div>
            @endif
        </div>
    </div>

    <!-- Related Publications -->
    @if(isset($related) && $related->isNotEmpty())
    <div class="pt-8">
        <h3 class="text-xl font-bold text-gray-900 mb-6">Related {{ $publication->category ?? 'Publications' }}</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($related as $item)
                @php
                    $relImageUrl = null;
                    if ($isValidPath($item->cover_file)) $relImageUrl = Storage::url($item->cover_file);
                    elseif ($isValidPath($item->thumbnail)) $relImageUrl = Storage::url($item->thumbnail);
                    elseif ($isValidPath($item->cover_image)) $relImageUrl = Storage::url($item->cover_image);
                @endphp
                <a href="{{ route('admin.publications.show', $item) }}" class="group bg-white rounded-xl shadow-sm hover:shadow-md border border-gray-100 overflow-hidden flex flex-col transition-all hover:-translate-y-1">
                    <div class="h-40 bg-gray-50 relative overflow-hidden">
                        @if($relImageUrl)
                            <img src="{{ $relImageUrl }}" alt="{{ $item->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        @else
                            <div class="w-full h-full flex items-center justify-center text-gray-300 bg-gradient-to-br from-gray-50 to-gray-100">
                                <i class="bi bi-file-text text-3xl"></i>
                            </div>
                        @endif
                    </div>
                    <div class="p-4 flex-1 flex flex-col">
                        <h4 class="font-bold text-gray-900 line-clamp-2 mb-2 group-hover:text-primary transition-colors">{{ $item->title }}</h4>
                        <div class="mt-auto text-xs text-gray-500 flex items-center gap-1.5">
                            <i class="bi bi-calendar3"></i>
                            {{ $item->published_at ? \Carbon\Carbon::parse($item->published_at)->format('d M Y') : 'Draft' }}
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
    @endif
</div>
@endsection

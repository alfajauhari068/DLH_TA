@extends('layouts.admin')

@section('title', 'Gallery')

@section('content')
<x-admin.index.layout>

    <x-slot:breadcrumb>
        <div class="text-sm text-gray-500 mb-2">
            Dashboard / <span class="text-gray-700 font-medium">Gallery</span>
        </div>
    </x-slot:breadcrumb>

    <x-slot:header>
        <x-admin.index.header 
            title="Gallery Albums" 
            subtitle="Manage gallery albums and their images." 
            actionUrl="{{ route('admin.galleries.create') }}" 
            actionText="Create Gallery" />
    </x-slot:header>

    <x-slot:toolbar>
        <x-admin.index.toolbar 
            :action="route('admin.galleries.index')" 
            searchPlaceholder="Search galleries..." 
            :hasStatus="true"
            :statuses="['published' => 'Published', 'draft' => 'Draft']"
            :hasSort="true" 
            :hasDate="true" />
    </x-slot:toolbar>

    @if($galleries->isEmpty())
        <x-admin.index.empty 
            title="No Galleries Available" 
            description="Create your first gallery album to display images." 
            actionUrl="{{ route('admin.galleries.create') }}" 
            actionText="Create Gallery" 
            icon="bi-images" />
    @else
        <x-admin.index.grid cols="lg:grid-cols-3 xl:grid-cols-4">
            @foreach($galleries as $gallery)
                @php
                    $imageUrl = null;
                    if (!empty($gallery->cover_image)) {
                        $imageUrl = asset('storage/' . $gallery->cover_image);
                    } elseif (!empty($gallery->featured_image)) {
                        $imageUrl = asset('storage/' . $gallery->featured_image);
                    } elseif (!empty($gallery->thumbnail)) {
                        $imageUrl = asset('storage/' . $gallery->thumbnail);
                    } elseif (!empty($gallery->image)) {
                        $imageUrl = asset('storage/' . $gallery->image);
                    }
                @endphp
                <x-admin.index.grid-card 
                    :url="route('admin.galleries.show', $gallery)" 
                    :title="$gallery->title" 
                    :image="$imageUrl" 
                    :status="$gallery->status"
                    badge="Gallery"
                >
                    <x-slot:meta>
                        <div class="flex items-center gap-1.5 w-1/2">
                            <i class="bi bi-images"></i>
                            <span class="truncate">{{ $gallery->images_count ?? 0 }} Images</span>
                        </div>
                        <div class="flex items-center gap-1.5 text-right w-1/2 justify-end">
                            <i class="bi bi-calendar3"></i>
                            <span>{{ $gallery->published_at ? \Carbon\Carbon::parse($gallery->published_at)->format('M d, Y') : '-' }}</span>
                        </div>
                    </x-slot:meta>

                    <x-slot:actions>
                        <div class="flex items-center gap-1 w-full">
                            <a href="{{ route('admin.galleries.show', $gallery) }}" class="flex-1 flex justify-center items-center py-2 bg-gray-50 text-gray-700 text-sm font-semibold rounded-lg hover:bg-gray-200 transition-colors tooltip relative z-20" title="View">
                                <i class="bi bi-eye mr-1"></i> View
                            </a>
                            <a href="{{ route('admin.galleries.edit', $gallery) }}" class="flex-1 flex justify-center items-center py-2 bg-blue-50 text-blue-700 text-sm font-semibold rounded-lg hover:bg-blue-100 transition-colors tooltip relative z-20" title="Edit">
                                <i class="bi bi-pencil-square mr-1"></i> Edit
                            </a>
                            <form action="{{ route('admin.galleries.destroy', $gallery) }}" method="POST" class="inline relative z-20" onsubmit="return confirm('Apakah Anda yakin ingin menghapus galeri ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="flex justify-center items-center py-2 px-3 bg-red-50 text-red-600 rounded-lg hover:bg-red-100 transition-colors tooltip" title="Delete">
                                    <i class="bi bi-trash3"></i>
                                </button>
                            </form>
                        </div>
                    </x-slot:actions>
                </x-admin.index.grid-card>
            @endforeach
        </x-admin.index.grid>

        <x-slot:pagination>
            {{ $galleries->withQueryString()->links() }}
        </x-slot:pagination>
    @endif

</x-admin.index.layout>
@endsection

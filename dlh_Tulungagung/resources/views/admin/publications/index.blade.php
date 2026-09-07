@extends('layouts.admin')

@section('content')
<x-admin.index.layout>

    <x-slot:breadcrumb>
        <div class="text-sm text-gray-500 mb-2">
            Dashboard / <span class="text-gray-700 font-medium">Publications</span>
        </div>
    </x-slot:breadcrumb>

    <x-slot:header>
        <x-admin.index.header 
            title="Publications" 
            subtitle="Manage publications and articles." 
            actionUrl="{{ route('admin.publications.create') }}" 
            actionText="Tambah Publikasi" />
    </x-slot:header>

    <x-slot:toolbar>
        <x-admin.index.toolbar 
            :action="route('admin.publications.index')" 
            searchPlaceholder="Search publications..." 
            :hasCategory="true"
            :hasStatus="true"
            :statuses="['published' => 'Published', 'draft' => 'Draft', 'archived' => 'Archived']"
            :hasSort="true" 
            :hasDate="true" />
    </x-slot:toolbar>

    @if($publications->isEmpty())
        <x-admin.index.empty 
            title="No Publications Available" 
            description="Get started by creating your first publication." 
            actionUrl="{{ route('admin.publications.create') }}" 
            actionText="Create Publication" 
            icon="bi-journal-text" />
    @else
        <x-admin.index.grid cols="lg:grid-cols-3">
            @foreach($publications as $item)
                @php
                    $imageUrl = null;
                    $fallbackIcon = null;

                    $isValidPath = function($path) {
                        return !empty($path) && !str_contains($path, '.tmp') && !str_contains($path, 'php');
                    };

                    if ($isValidPath($item->cover_file)) {
                        $imageUrl = Storage::url($item->cover_file);
                    } elseif ($isValidPath($item->thumbnail)) {
                        $imageUrl = Storage::url($item->thumbnail);
                    } elseif ($isValidPath($item->cover_image)) {
                        $imageUrl = Storage::url($item->cover_image);
                    }

                    if (empty($imageUrl) && !empty($item->document_file)) {
                        $ext = strtolower(pathinfo($item->document_file, PATHINFO_EXTENSION));
                        if (in_array($ext, ['jpg', 'jpeg', 'png', 'webp'])) {
                            if ($isValidPath($item->document_file)) {
                                $imageUrl = Storage::url($item->document_file);
                            }
                        } else {
                            $icons = [
                                'pdf' => 'bi-file-earmark-pdf text-red-500',
                                'doc' => 'bi-file-earmark-word text-blue-500',
                                'docx' => 'bi-file-earmark-word text-blue-500',
                                'xls' => 'bi-file-earmark-excel text-green-500',
                                'xlsx' => 'bi-file-earmark-excel text-green-500',
                                'zip' => 'bi-file-earmark-zip text-yellow-500',
                                'default' => 'bi-file-earmark-text text-gray-500'
                            ];
                            $fallbackIcon = $icons[$ext] ?? $icons['default'];
                        }
                    }

                    if (empty($imageUrl) && empty($fallbackIcon)) {
                        $categoryIcons = [
                            'book' => 'bi-book text-indigo-500',
                            'journal' => 'bi-journal text-blue-500',
                            'report' => 'bi-graph-up text-green-500',
                            'default' => 'bi-file-text text-gray-400'
                        ];
                        $cat = strtolower($item->category ?? '');
                        $fallbackIcon = $categoryIcons[$cat] ?? $categoryIcons['default'];
                    }
                @endphp
                <x-admin.index.grid-card 
                    :url="route('admin.publications.show', $item)" 
                    :title="$item->title" 
                    :image="$imageUrl" 
                    :icon="$fallbackIcon"
                    :status="$item->status ?? 'draft'"
                    :badge="$item->category ?? 'Publication'"
                >
                    <x-slot:meta>
                        <div class="flex items-center gap-1.5 w-1/2">
                            <i class="bi bi-person-circle"></i>
                            <span class="truncate">{{ $item->author?->name ?? 'Admin' }}</span>
                        </div>
                        <div class="flex items-center gap-1.5 text-right w-1/2 justify-end">
                            <i class="bi bi-calendar3"></i>
                            <span>{{ isset($item->published_at) ? \Carbon\Carbon::parse($item->published_at)->format('M d, Y') : '-' }}</span>
                        </div>
                    </x-slot:meta>

                    <x-slot:actions>
                        <div class="flex items-center gap-1 w-full">
                            <a href="{{ route('admin.publications.show', $item) }}" class="flex-1 flex justify-center items-center py-2 bg-gray-50 text-gray-700 text-sm font-semibold rounded-lg hover:bg-gray-200 transition-colors tooltip relative z-20" title="View">
                                <i class="bi bi-eye mr-1"></i> View
                            </a>
                            <a href="{{ route('admin.publications.edit', $item) }}" class="flex-1 flex justify-center items-center py-2 bg-blue-50 text-blue-700 text-sm font-semibold rounded-lg hover:bg-blue-100 transition-colors tooltip relative z-20" title="Edit">
                                <i class="bi bi-pencil-square mr-1"></i> Edit
                            </a>
                            <form action="{{ route('admin.publications.destroy', $item) }}" method="POST" class="inline relative z-20" onsubmit="return confirm('Apakah Anda yakin ingin menghapus publikasi ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="flex justify-center items-center gap-1 py-2 px-3 bg-red-600 text-white text-sm font-semibold rounded-lg hover:bg-red-700 transition-colors tooltip" title="Hapus publikasi">
                                    <i class="bi bi-trash3"></i> Hapus Publikasi
                                </button>
                            </form>
                        </div>
                    </x-slot:actions>
                </x-admin.index.grid-card>
            @endforeach
        </x-admin.index.grid>

        <x-slot:pagination>
            {{ $publications->withQueryString()->links() }}
        </x-slot:pagination>
    @endif

</x-admin.index.layout>
@endsection

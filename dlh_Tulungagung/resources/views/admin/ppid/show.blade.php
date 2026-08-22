@extends('layouts.admin')

@section('title', 'Lihat PPID Document')
@section('subtitle', 'Lihat details of public information document.')

@section('actions')
    @can('update', $ppidDocument)
        <x-ui.button href="{{ route('admin.ppid.edit', $ppidDocument) }}" variant="primary">Edit Document</x-ui.button>
    @endcan
@endsection

@section('breadcrumb')
    <x-ui.breadcrumb :items="[
        ['label' => 'Dashboard', 'url' => route('dashboard')],
        ['label' => 'PPID', 'url' => route('admin.ppid.index')],
        ['label' => 'Lihat']
    ]" />
@endsection

@section('content')
    <x-ui.card>
        <div class="space-y-6">
            <div>
                <h3 class="text-lg font-medium text-gray-900">Title</h3>
                <p class="mt-1 text-gray-700">{{ $ppidDocument->title }}</p>
            </div>
            
            <div>
                <h3 class="text-lg font-medium text-gray-900">Category</h3>
                <p class="mt-1 text-gray-700">{{ $ppidDocument->category_name ?? 'General' }}</p>
            </div>

            <div>
                <h3 class="text-lg font-medium text-gray-900">Status</h3>
                <p class="mt-1">
                    <span class="px-2 py-1 text-xs font-semibold rounded-full {{ $ppidDocument->status ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                        {{ $ppidDocument->status ? 'Published' : 'Draft' }}
                    </span>
                </p>
            </div>

            <div>
                <h3 class="text-lg font-medium text-gray-900">Description</h3>
                <div class="mt-2 text-gray-700">
                    {{ $ppidDocument->description ?: 'No description provided.' }}
                </div>
            </div>

            <div>
                <h3 class="text-lg font-medium text-gray-900">File Attachment</h3>
                <div class="mt-2">
                    @if($ppidDocument->file_path)
                        <a href="{{ Storage::url($ppidDocument->file_path) }}" target="_blank" class="inline-flex items-center text-primary hover:underline">
                            <i class="bi bi-file-earmark-pdf mr-2"></i> Lihat/Download Document
                        </a>
                    @else
                        <span class="text-gray-500">No file attached.</span>
                    @endif
                </div>
            </div>
        </div>
    </x-ui.card>
@endsection

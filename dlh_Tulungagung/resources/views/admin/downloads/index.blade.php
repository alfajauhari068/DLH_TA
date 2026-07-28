@extends('layouts.admin')

@section('title', 'Downloads')

@section('content')
<x-admin.index.layout>

    <x-slot:breadcrumb>
        <div class="text-sm text-gray-500 mb-2">
            Dashboard / <span class="text-gray-700 font-medium">Downloads</span>
        </div>
    </x-slot:breadcrumb>

    <x-slot:header>
        <x-admin.index.header 
            title="Downloads" 
            subtitle="Manage downloadable resources and documents." 
            actionUrl="{{ route('admin.downloads.create') }}" 
            actionText="Create Download" />
    </x-slot:header>

    <x-slot:toolbar>
        <x-admin.index.toolbar 
            :action="route('admin.downloads.index')" 
            searchPlaceholder="Search downloads..." 
            :hasStatus="true"
            :statuses="['published' => 'Published', 'draft' => 'Draft']"
            :hasSort="true" 
            :hasDate="false" />
    </x-slot:toolbar>

    @if($downloads->isEmpty())
        <x-admin.index.empty 
            title="No Downloads Available" 
            description="Get started by uploading your first document." 
            actionUrl="{{ route('admin.downloads.create') }}" 
            actionText="Upload Document" 
            icon="bi-cloud-arrow-up" />
    @else
        <x-admin.index.table>
            <x-slot:head>
                <th class="px-6 py-3">Title</th>
                <th class="px-6 py-3">Category</th>
                <th class="px-6 py-3">Status</th>
                <th class="px-6 py-3 text-center">Downloads</th>
                <th class="px-6 py-3 text-right">Actions</th>
            </x-slot:head>
            @foreach($downloads as $download)
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4 font-medium">{{ $download->title }}</td>
                    <td class="px-6 py-4 text-gray-500">{{ $download->category ?? '-' }}</td>
                    <td class="px-6 py-4">
                        @if($download->status === 'public' || $download->status === 'published')
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Public</span>
                        @else
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">{{ ucfirst($download->status) }}</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-center font-medium text-gray-900">{{ number_format((int)$download->downloads) }}</td>
                    <td class="px-6 py-4 text-right">
                        <a href="{{ route('admin.downloads.show', $download) }}" class="text-gray-500 hover:text-gray-700 mr-3" title="View"><i class="bi bi-eye"></i></a>
                        <a href="{{ route('admin.downloads.edit', $download) }}" class="text-blue-600 hover:text-blue-900 mr-3">Edit</a>
                        <form action="{{ route('admin.downloads.destroy', $download) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </x-admin.index.table>

        <x-slot:pagination>
            {{ $downloads->withQueryString()->links() }}
        </x-slot:pagination>
    @endif

</x-admin.index.layout>
@endsection

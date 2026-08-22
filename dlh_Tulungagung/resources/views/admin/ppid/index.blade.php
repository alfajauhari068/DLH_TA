@extends('layouts.admin')

@section('title', 'PPID Documents')

@section('content')
<x-admin.index.layout>

    <x-slot:breadcrumb>
        <div class="text-sm text-gray-500 mb-2">
            Dashboard / <span class="text-gray-700 font-medium">PPID</span>
        </div>
    </x-slot:breadcrumb>

    <x-slot:header>
        <x-admin.index.header 
            title="PPID Documents" 
            subtitle="Manage public information documents (PPID)." 
            actionUrl="{{ auth()->user()->can('create', App\Models\PpidDocument::class) ? route('admin.ppid.create') : null }}" 
            actionText="Add Document" />
    </x-slot:header>

    <x-slot:toolbar>
        <x-admin.index.toolbar 
            :action="route('admin.ppid.index')" 
            searchPlaceholder="Search documents..." 
            :hasStatus="true"
            :statuses="['1' => 'Published', '0' => 'Draft']"
            :hasSort="true" 
            :hasDate="false" />
    </x-slot:toolbar>

    @if($ppids->isEmpty())
        <x-admin.index.empty 
            title="No PPID Documents" 
            description="Upload public information documents for transparency." 
            actionUrl="{{ auth()->user()->can('create', App\Models\PpidDocument::class) ? route('admin.ppid.create') : null }}" 
            actionText="Add Document" 
            icon="bi-file-earmark-pdf" />
    @else
        <x-admin.index.table>
            <x-slot:head>
                <th class="px-6 py-3">Title</th>
                <th class="px-6 py-3">Category</th>
                <th class="px-6 py-3 text-center">Status</th>
                <th class="px-6 py-3 text-right">Actions</th>
            </x-slot:head>
            @foreach($ppids as $document)
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4 font-medium">{{ $document->title }}</td>
                    <td class="px-6 py-4 text-gray-500">{{ $document->category_name ?? 'General' }}</td>
                    <td class="px-6 py-4 text-center">
                        @if($document->status)
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Published</span>
                        @else
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">Draft</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-right">
                        @can('update', $document)
                            <a href="{{ route('admin.ppid.edit', $document) }}" class="text-blue-600 hover:text-blue-900 mr-3">Edit</a>
                        @endcan
                        @can('delete', $document)
                            <form action="{{ route('admin.ppid.destroy', $document) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus dokumen ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                            </form>
                        @endcan
                    </td>
                </tr>
            @endforeach
        </x-admin.index.table>

        <x-slot:pagination>
            {{ $ppids->withQueryString()->links() }}
        </x-slot:pagination>
    @endif

</x-admin.index.layout>
@endsection

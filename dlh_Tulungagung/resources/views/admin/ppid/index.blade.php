@extends('layouts.admin')

@section('title', 'PPID Documents')
@section('subtitle', 'Manage public information documents (PPID).')

@section('actions')
    @can('create', App\Models\PpidDocument::class)
        <x-ui.button href="{{ route('admin.ppid.create') }}" variant="primary">Add Document</x-ui.button>
    @endcan
@endsection

@section('breadcrumb')
    <x-ui.breadcrumb :items="[
        ['label' => 'Dashboard', 'url' => route('dashboard')],
        ['label' => 'PPID']
    ]" />
@endsection

@section('content')
    <x-ui.card>
        <x-slot:toolbar>
            <x-ui.toolbar>
                <form action="{{ route('admin.ppid.index') }}" method="GET" class="flex gap-2">
                    <input type="text" name="search" placeholder="Search documents..." value="{{ request('search') }}" class="form-input rounded-md border-gray-300">
                    <x-ui.button type="submit" variant="secondary">Search</x-ui.button>
                </form>
            </x-ui.toolbar>
        </x-slot:toolbar>

        <x-ui.table :headers="['Title', 'Category', 'Status', 'Actions']">
            @forelse($ppids as $document)
                <tr>
                    <td class="px-6 py-4">{{ $document->title }}</td>
                    <td class="px-6 py-4">{{ $document->category_name ?? 'General' }}</td>
                    <td class="px-6 py-4">
                        <span class="px-2 py-1 text-xs font-semibold rounded-full {{ $document->status ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                            {{ $document->status ? 'Published' : 'Draft' }}
                        </span>
                    </td>
                    <td class="px-6 py-4 text-right">
                        @can('update', $document)
                            <a href="{{ route('admin.ppid.edit', $document) }}" class="text-primary hover:underline">Edit</a>
                        @endcan
                    </td>
                </tr>
            @empty
                <x-slot:empty>
                    <div class="text-center py-8 text-gray-500">No PPID documents found.</div>
                </x-slot:empty>
            @endforelse
        </x-ui.table>

        <x-slot:pagination>
            {{ $ppids->links() }}
        </x-slot:pagination>
    </x-ui.card>
@endsection

@extends('layouts.admin')

@section('title', 'Programs')

@section('content')
<x-admin.index.layout>

    <x-slot:breadcrumb>
        <div class="text-sm text-gray-500 mb-2">
            Dashboard / <span class="text-gray-700 font-medium">Programs</span>
        </div>
    </x-slot:breadcrumb>

    <x-slot:header>
        <x-admin.index.header 
            title="Programs" 
            subtitle="Manage public programs and initiatives." 
            actionUrl="{{ route('admin.programs.create') }}" 
            actionText="Create Program" />
    </x-slot:header>

    <x-slot:toolbar>
        <x-admin.index.toolbar 
            :action="route('admin.programs.index')" 
            searchPlaceholder="Search programs..." 
            :hasStatus="true"
            :statuses="['published' => 'Published', 'draft' => 'Draft']"
            :hasSort="true" 
            :hasDate="true" />
    </x-slot:toolbar>

    @if($programs->isEmpty())
        <x-admin.index.empty 
            title="No Programs Available" 
            description="Create your first public program or initiative." 
            actionUrl="{{ route('admin.programs.create') }}" 
            actionText="Create Program" 
            icon="bi-diagram-3" />
    @else
        <x-admin.index.table>
            <x-slot:head>
                <th class="px-6 py-3">Title</th>
                <th class="px-6 py-3">Status</th>
                <th class="px-6 py-3">Published Date</th>
                <th class="px-6 py-3 text-right">Actions</th>
            </x-slot:head>
            @foreach($programs as $program)
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4 font-medium">{{ $program->title }}</td>
                    <td class="px-6 py-4">
                        @if(in_array(strtolower($program->status ?? ''), ['public', 'published']))
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Published</span>
                        @else
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">{{ ucfirst($program->status ?? 'Draft') }}</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-gray-500">{{ optional($program->published_at)->format('M d, Y') ?? '-' }}</td>
                    <td class="px-6 py-4 text-right">
                        <a href="{{ route('admin.programs.show', $program) }}" class="text-gray-500 hover:text-gray-700 mr-3" title="View"><i class="bi bi-eye"></i></a>
                        <a href="{{ route('admin.programs.edit', $program) }}" class="text-blue-600 hover:text-blue-900 mr-3">Edit</a>
                        <form action="{{ route('admin.programs.destroy', $program) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus program ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </x-admin.index.table>

        <x-slot:pagination>
            {{ $programs->withQueryString()->links() }}
        </x-slot:pagination>
    @endif

</x-admin.index.layout>
@endsection

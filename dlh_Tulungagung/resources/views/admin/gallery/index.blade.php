@extends('layouts.admin')

@section('content')
<div class="space-y-6">
    <x-admin.crud.toolbar :title="'Gallery'" :createRoute="route('admin.galleries.create')" />

    <x-admin.crud.search :action="route('admin.galleries.index')" />

    <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Title</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Published</th>
                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 bg-white">
                @forelse($galleries as $gallery)
                    <tr>
                        <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $gallery->title }}</td>
                        <td class="px-6 py-4 text-sm text-gray-600">{{ $gallery->status_label ?? 'Draft' }}</td>
                        <td class="px-6 py-4 text-sm text-gray-600">{{ optional($gallery->published_at)->format('Y-m-d') }}</td>
                        <td class="px-6 py-4 text-right text-sm font-medium">
                            <a href="{{ route('admin.galleries.show', $gallery) }}" class="text-indigo-600 hover:text-indigo-900">View</a>
                            <a href="{{ route('admin.galleries.edit', $gallery) }}" class="ml-3 text-yellow-600 hover:text-yellow-900">Edit</a>
                            <form action="{{ route('admin.galleries.destroy', $gallery) }}" method="POST" class="inline-block ml-3">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-6 py-12 text-center text-sm text-gray-500">No galleries found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{ $galleries->links() }}
</div>
@endsection

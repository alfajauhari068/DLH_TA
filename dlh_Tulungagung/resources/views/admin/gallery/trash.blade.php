@extends('layouts.admin')

@section('content')
<div class="space-y-6">
    <div class="flex items-center justify-between">
        <h2 class="text-xl font-semibold text-gray-900">Trashed Galleries</h2>
        <a href="{{ route('admin.galleries.index') }}" class="text-sm text-indigo-600 hover:text-indigo-900">Back to list</a>
    </div>
    <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Title</th>
                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 bg-white">
                @forelse($galleries as $gallery)
                    <tr>
                        <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $gallery->title }}</td>
                        <td class="px-6 py-4 text-right text-sm font-medium">
                            <form action="{{ route('admin.galleries.restore', $gallery->id) }}" method="POST" class="inline">
                                @csrf
                                <button type="submit" class="text-green-600 hover:text-green-900">Pulihkan</button>
                            </form>
                            <form action="{{ route('admin.galleries.forceHapus', $gallery->id) }}" method="POST" class="inline ml-3">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900">Hapus Permanently</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2" class="px-6 py-12 text-center text-sm text-gray-500">No trashed galleries.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    {{ $galleries->links() }}
</div>
@endsection

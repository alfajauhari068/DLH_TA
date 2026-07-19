@extends('layouts.admin')

@section('title', 'Edit PPID Document')
@section('subtitle', 'Perbarui an existing public information document.')

@section('breadcrumb')
    <x-ui.breadcrumb :items="[
        ['label' => 'Dashboard', 'url' => route('dashboard')],
        ['label' => 'PPID', 'url' => route('admin.ppid.index')],
        ['label' => 'Edit']
    ]" />
@endsection

@section('content')
    <x-ui.card>
        <form action="{{ route('admin.ppid.update', $ppidDocument) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" id="title" value="{{ old('title', $ppidDocument->title) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary sm:text-sm" required>
                @error('title')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" id="description" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary sm:text-sm">{{ old('description', $ppidDocument->description) }}</textarea>
                @error('description')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div>
                <label for="file" class="block text-sm font-medium text-gray-700">Document File (Leave empty to keep current file)</label>
                <input type="file" name="file" id="file" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-primary file:text-white hover:file:bg-primary-dark">
                @if($ppidDocument->file_path)
                    <p class="mt-2 text-sm text-gray-500">Current file: <a href="{{ Storage::url($ppidDocument->file_path) }}" target="_blank" class="text-primary hover:underline">Lihat Document</a></p>
                @endif
                @error('file')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                <select name="status" id="status" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary sm:text-sm">
                    <option value="0" {{ old('status', $ppidDocument->status) == '0' ? 'selected' : '' }}>Draft</option>
                    <option value="1" {{ old('status', $ppidDocument->status) == '1' ? 'selected' : '' }}>Published</option>
                </select>
                @error('status')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end gap-3 pt-4">
                <x-ui.button type="button" href="{{ route('admin.ppid.index') }}" variant="secondary">Batal</x-ui.button>
                <x-ui.button type="submit" variant="primary">Perbarui</x-ui.button>
            </div>
        </form>
    </x-ui.card>
@endsection

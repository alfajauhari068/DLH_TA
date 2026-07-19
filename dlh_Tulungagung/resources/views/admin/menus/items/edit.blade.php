@extends('layouts.admin')

@section('title', 'Edit Menu Navigasi')
@section('subtitle', 'Mengubah tautan navbar')

@section('breadcrumb')
    <x-ui.breadcrumb :items="[
        ['label' => 'Dashboard', 'url' => route('dashboard')],
        ['label' => 'Menu Navigasi', 'url' => route('admin.menus.index')],
        ['label' => 'Edit Menu']
    ]" />
@endsection

@section('content')
    <div class="max-w-2xl">
        <x-ui.card>
            <form action="{{ route('admin.menus.items.update', $item) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="mb-4">
                    <label for="parent_id" class="block text-sm font-medium text-gray-700 mb-1">Pilih Induk Menu (Opsional)</label>
                    <select name="parent_id" id="parent_id" class="form-select w-full rounded-md border-gray-300 shadow-sm focus:border-emerald-500 focus:ring focus:ring-emerald-200 focus:ring-opacity-50">
                        <option value="">-- Sebagai Menu Utama --</option>
                        @foreach($parentOptions as $option)
                            <option value="{{ $option->id }}" {{ old('parent_id', $item->parent_id) == $option->id ? 'selected' : '' }}>
                                {{ $option->title }}
                            </option>
                        @endforeach
                    </select>
                    <p class="text-xs text-gray-500 mt-1">Pilih menu induk jika ingin menjadikannya dropdown.</p>
                    @error('parent_id') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>

                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Judul Tautan <span class="text-red-500">*</span></label>
                    <input type="text" name="title" id="title" value="{{ old('title', $item->title) }}" required class="form-input w-full rounded-md border-gray-300 shadow-sm focus:border-emerald-500 focus:ring focus:ring-emerald-200 focus:ring-opacity-50">
                    <p class="text-xs text-gray-500 mt-1">Teks yang akan muncul di navbar.</p>
                    @error('title') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>

                <div class="mb-4">
                    <label for="url" class="block text-sm font-medium text-gray-700 mb-1">Tujuan URL <span class="text-red-500">*</span></label>
                    <input type="text" name="url" id="url" value="{{ old('url', $item->url) }}" required class="form-input w-full rounded-md border-gray-300 shadow-sm focus:border-emerald-500 focus:ring focus:ring-emerald-200 focus:ring-opacity-50">
                    <p class="text-xs text-gray-500 mt-1">Bisa berupa path relatif (misal: `/profil`) atau URL absolut (misal: `https://google.com`).</p>
                    @error('url') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>

                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div>
                        <label for="order" class="block text-sm font-medium text-gray-700 mb-1">Urutan</label>
                        <input type="number" name="order" id="order" value="{{ old('order', $item->order) }}" class="form-input w-full rounded-md border-gray-300 shadow-sm focus:border-emerald-500 focus:ring focus:ring-emerald-200 focus:ring-opacity-50">
                        @error('order') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="target" class="block text-sm font-medium text-gray-700 mb-1">Target</label>
                        <select name="target" id="target" class="form-select w-full rounded-md border-gray-300 shadow-sm focus:border-emerald-500 focus:ring focus:ring-emerald-200 focus:ring-opacity-50">
                            <option value="_self" {{ old('target', $item->target) == '_self' ? 'selected' : '' }}>Tab Sama (_self)</option>
                            <option value="_blank" {{ old('target', $item->target) == '_blank' ? 'selected' : '' }}>Tab Baru (_blank)</option>
                        </select>
                        @error('target') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="mt-6 flex justify-end gap-3">
                    <a href="{{ route('admin.menus.index') }}" class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">Batal</a>
                    <button type="submit" class="px-4 py-2 bg-emerald-600 border border-transparent rounded-md text-sm font-medium text-white hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </x-ui.card>
    </div>
@endsection

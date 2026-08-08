@extends('layouts.admin')

@section('title', 'Tambah Setting')
@section('subtitle', 'Buat kunci konfigurasi website baru.')

@section('breadcrumb')
    <x-ui.breadcrumb :items="[
        ['label' => 'Dashboard', 'url' => route('dashboard')],
        ['label' => 'Settings', 'url' => route('admin.settings.index')],
        ['label' => 'Tambah']
    ]" />
@endsection

@section('content')
    <x-ui.card>
        <form action="{{ route('admin.settings.store') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label for="key" class="block text-sm font-medium text-gray-700">Setting Key</label>
                <div class="mt-1">
                    <input type="text" name="key" id="key" value="{{ old('key') }}" placeholder="contoh: site_name, office_email" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary sm:text-sm" required>
                </div>
                @error('key')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="value" class="block text-sm font-medium text-gray-700">Setting Value</label>
                <div class="mt-1">
                    <textarea name="value" id="value" rows="5" placeholder="Masukkan nilai konfigurasi..." class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary sm:text-sm">{{ old('value') }}</textarea>
                </div>
                @error('value')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="group" class="block text-sm font-medium text-gray-700">Group / Kategori</label>
                <div class="mt-1">
                    <input type="text" name="group" id="group" value="{{ old('group', 'general') }}" placeholder="contoh: general, contact, social" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary sm:text-sm">
                </div>
                @error('group')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end gap-3 pt-4">
                <x-ui.button type="button" href="{{ route('admin.settings.index') }}" variant="secondary">Batal</x-ui.button>
                <x-ui.button type="submit" variant="primary">Simpan</x-ui.button>
            </div>
        </form>
    </x-ui.card>
@endsection

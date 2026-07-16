@extends('layouts.admin')

@section('title', 'Edit Setting')
@section('subtitle', 'Update website setting value.')

@section('breadcrumb')
    <x-ui.breadcrumb :items="[
        ['label' => 'Dashboard', 'url' => route('dashboard')],
        ['label' => 'Settings', 'url' => route('admin.settings.index')],
        ['label' => 'Edit']
    ]" />
@endsection

@section('content')
    <x-ui.card>
        <form action="{{ route('admin.settings.update', $setting) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-medium text-gray-700">Setting Key</label>
                <div class="mt-1">
                    <input type="text" disabled value="{{ $setting->key }}" class="block w-full rounded-md border-gray-300 bg-gray-100 shadow-sm text-gray-500 sm:text-sm">
                </div>
            </div>

            <div>
                <label for="value" class="block text-sm font-medium text-gray-700">Setting Value</label>
                @if($setting->type === 'textarea')
                    <textarea name="value" id="value" rows="5" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary sm:text-sm" required>{{ old('value', $setting->value) }}</textarea>
                @elseif($setting->type === 'boolean')
                    <select name="value" id="value" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary sm:text-sm">
                        <option value="1" {{ old('value', $setting->value) == '1' ? 'selected' : '' }}>True / Yes / Enabled</option>
                        <option value="0" {{ old('value', $setting->value) == '0' ? 'selected' : '' }}>False / No / Disabled</option>
                    </select>
                @else
                    <input type="text" name="value" id="value" value="{{ old('value', $setting->value) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring-primary sm:text-sm" required>
                @endif
                
                @error('value')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end gap-3 pt-4">
                <x-ui.button type="button" href="{{ route('admin.settings.index') }}" variant="secondary">Cancel</x-ui.button>
                <x-ui.button type="submit" variant="primary">Update</x-ui.button>
            </div>
        </form>
    </x-ui.card>
@endsection

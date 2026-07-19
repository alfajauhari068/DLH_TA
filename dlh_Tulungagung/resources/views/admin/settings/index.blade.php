@extends('layouts.admin')

@section('title', 'Website Settings')
@section('subtitle', 'Configure global application settings.')

@section('breadcrumb')
    <x-ui.breadcrumb :items="[
        ['label' => 'Dashboard', 'url' => route('dashboard')],
        ['label' => 'Settings']
    ]" />
@endsection

@section('content')
    <x-ui.card>
        <x-ui.table :headers="['Key', 'Value', 'Group', 'Aksi']">
            @forelse($settings as $setting)
                <tr>
                    <td class="px-6 py-4 font-medium">{{ $setting->key }}</td>
                    <td class="px-6 py-4">
                        <div class="truncate max-w-xs">{{ $setting->value }}</div>
                    </td>
                    <td class="px-6 py-4">{{ Str::title(str_replace('_', ' ', $setting->group ?? 'general')) }}</td>
                    <td class="px-6 py-4 text-right">
                        @can('update', $setting)
                            <a href="{{ route('admin.settings.edit', $setting) }}" class="text-primary hover:underline">Edit</a>
                        @endcan
                    </td>
                </tr>
            @empty
                <x-slot:empty>
                    <div class="text-center py-8 text-gray-500">No settings found.</div>
                </x-slot:empty>
            @endforelse
        </x-ui.table>

        <x-slot:pagination>
            {{ $settings->links() }}
        </x-slot:pagination>
    </x-ui.card>
@endsection

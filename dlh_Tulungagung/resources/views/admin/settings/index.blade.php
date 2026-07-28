@extends('layouts.admin')

@section('title', 'Website Settings')

@section('content')
<x-admin.index.layout>

    <x-slot:breadcrumb>
        <div class="text-sm text-gray-500 mb-2">
            Dashboard / <span class="text-gray-700 font-medium">Settings</span>
        </div>
    </x-slot:breadcrumb>

    <x-slot:header>
        <x-admin.index.header 
            title="Website Settings" 
            subtitle="Configure global application settings." 
            actionUrl="" 
            actionText="" />
    </x-slot:header>

    <x-slot:toolbar>
        <x-admin.index.toolbar 
            :action="route('admin.settings.index')" 
            searchPlaceholder="Search settings..." 
            :hasSort="false" 
            :hasDate="false" />
    </x-slot:toolbar>

    @if($settings->isEmpty())
        <x-admin.index.empty 
            title="No Settings Found" 
            description="Configuration keys are not currently available." 
            actionUrl="" 
            actionText="" 
            icon="bi-gear" />
    @else
        <x-admin.index.table>
            <x-slot:head>
                <th class="px-6 py-3">Key</th>
                <th class="px-6 py-3">Value</th>
                <th class="px-6 py-3">Group</th>
                <th class="px-6 py-3 text-right">Aksi</th>
            </x-slot:head>
            @foreach($settings as $setting)
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4 font-medium">{{ $setting->key }}</td>
                    <td class="px-6 py-4 text-gray-500">
                        <div class="truncate max-w-xs">{{ $setting->value }}</div>
                    </td>
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                            {{ Str::title(str_replace('_', ' ', $setting->group ?? 'general')) }}
                        </span>
                    </td>
                    <td class="px-6 py-4 text-right">
                        @can('update', $setting)
                            <a href="{{ route('admin.settings.edit', $setting) }}" class="text-blue-600 hover:text-blue-900">Edit</a>
                        @endcan
                    </td>
                </tr>
            @endforeach
        </x-admin.index.table>

        <x-slot:pagination>
            {{ $settings->withQueryString()->links() }}
        </x-slot:pagination>
    @endif

</x-admin.index.layout>
@endsection

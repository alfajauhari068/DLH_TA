@extends('layouts.admin')

@section('content')
<x-admin.index.layout>

    <x-slot:breadcrumb>
        <div class="text-sm text-gray-500 mb-2">
            Dashboard / <span class="text-gray-700 font-medium">Users</span>
        </div>
    </x-slot:breadcrumb>

    <x-slot:header>
        <x-admin.index.header 
            title="Users Management" 
            subtitle="Manage application users and role assignments." 
            actionUrl="{{ auth()->user()->can('create', App\Models\User::class) ? route('admin.users.create') : null }}" 
            actionText="Create User" />
    </x-slot:header>

    <x-slot:toolbar>
        <x-admin.index.toolbar 
            :action="route('admin.users.index')" 
            searchPlaceholder="Search users..." 
            :hasStatus="true"
            :statuses="['1' => 'Active', '0' => 'Inactive']"
            :hasSort="true" 
            :hasDate="false" />
    </x-slot:toolbar>

    @if($users->isEmpty())
        <x-admin.index.empty 
            title="No Users Available" 
            description="Create users to grant access to the application." 
            actionUrl="{{ auth()->user()->can('create', App\Models\User::class) ? route('admin.users.create') : null }}" 
            actionText="Create User" 
            icon="bi-people" />
    @else
        <x-admin.index.table>
            <x-slot:head>
                <th class="px-6 py-3">User</th>
                <th class="px-6 py-3">Role</th>
                <th class="px-6 py-3">Status</th>
                <th class="px-6 py-3">Last Login</th>
                <th class="px-6 py-3 text-right">Actions</th>
            </x-slot:head>
            @foreach($users as $user)
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-bold border border-blue-200">
                                {{ strtoupper(substr($user->name, 0, 1)) }}
                            </div>
                            <div>
                                <div class="font-medium text-gray-900">{{ $user->name }}</div>
                                <div class="text-xs text-gray-500">{{ $user->email }}</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-gray-600">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-md text-xs font-medium bg-gray-100 text-gray-800 border border-gray-200">
                            {{ $user->role?->name ?? 'User' }}
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        @if($user->status)
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Active</span>
                        @else
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">Inactive</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-gray-500 text-sm">
                        {{ optional($user->last_login)->format('d M Y H:i') ?? 'Never' }}
                    </td>
                    <td class="px-6 py-4 text-right">
                        @can('view', $user)
                            <a href="{{ route('admin.users.show', $user) }}" class="text-gray-500 hover:text-gray-700 mr-3" title="View"><i class="bi bi-eye"></i></a>
                        @endcan
                        @can('update', $user)
                            <a href="{{ route('admin.users.edit', $user) }}" class="text-blue-600 hover:text-blue-900 mr-3">Edit</a>
                        @endcan
                        @can('delete', $user)
                            <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="inline" onsubmit="return confirm('Hapus user ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                            </form>
                        @endcan
                    </td>
                </tr>
            @endforeach
        </x-admin.index.table>

        <x-slot:pagination>
            {{ $users->withQueryString()->links() }}
        </x-slot:pagination>
    @endif

</x-admin.index.layout>
@endsection

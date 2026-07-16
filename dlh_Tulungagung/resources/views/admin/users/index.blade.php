@extends('layouts.admin')

@section('title', 'Users')
@section('subtitle', 'Manage application users and role assignments.')

@section('actions')
    @can('create', App\Models\User::class)
        <x-admin.button href="{{ route('admin.users.create') }}" variant="primary" size="sm">New user</x-admin.button>
    @endcan
@endsection

@section('breadcrumb')
    <x-admin.breadcrumb :items="[
        ['label' => 'Dashboard', 'url' => route('dashboard')],
        ['label' => 'Users'],
    ]" />
@endsection

@section('content')
    <x-admin.card title="User directory" subtitle="Browse and manage application users.">
        <div class="d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between gap-3 mb-4">
            <div class="text-muted">Showing {{ $users->total() }} user{{ $users->total() === 1 ? '' : 's' }}.</div>
            <div class="d-flex gap-2 flex-wrap">
                @can('create', App\Models\User::class)
                    <a href="{{ route('admin.users.create') }}" class="btn btn-outline-primary btn-sm">Create user</a>
                @endcan
            </div>
        </div>

        <x-admin.table>
            <thead class="table-light">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Status</th>
                    <th scope="col">Last login</th>
                    <th scope="col" class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role?->name ?? '–' }}</td>
                        <td>{{ $user->phone ?: '–' }}</td>
                        <td>
                            <span class="badge {{ $user->status ? 'bg-success' : 'bg-secondary' }}">
                                {{ $user->status ? 'Active' : 'Inactive' }}
                            </span>
                        </td>
                        <td>{{ optional($user->last_login)->format('d M Y H:i') ?? '–' }}</td>
                        <td class="text-end">
                            <div class="d-flex justify-content-end gap-2 flex-wrap">
                                @can('view', $user)
                                    <a href="{{ route('admin.users.show', $user) }}" class="btn btn-sm btn-outline-secondary">View</a>
                                @endcan
                                @can('update', $user)
                                    <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                @endcan
                                @can('delete', $user)
                                    <form action="{{ route('admin.users.destroy', $user) }}" method="POST" onsubmit="return confirm('Delete this user?');" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                    </form>
                                @endcan
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center py-4">No users found.</td>
                    </tr>
                @endforelse
            </tbody>
        </x-admin.table>

        <div class="mt-4">
            {{ $users->withQueryString()->links() }}
        </div>
    </x-admin.card>
@endsection

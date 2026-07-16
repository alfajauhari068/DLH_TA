@extends('layouts.admin')

@section('title', 'User details')
@section('subtitle', 'Review the user account information and status.')

@section('breadcrumb')
    <x-admin.breadcrumb :items="[
        ['label' => 'Dashboard', 'url' => route('dashboard')],
        ['label' => 'Users', 'url' => route('admin.users.index')],
        ['label' => $user->name],
    ]" />
@endsection

@section('content')
    <x-admin.card title="{{ $user->name }}" subtitle="Account details for this user.">
        <div class="row gy-3">
            <div class="col-12 col-md-6">
                <dl class="row mb-0">
                    <dt class="col-5 text-muted">Name</dt>
                    <dd class="col-7">{{ $user->name }}</dd>

                    <dt class="col-5 text-muted">Email</dt>
                    <dd class="col-7">{{ $user->email }}</dd>

                    <dt class="col-5 text-muted">Role</dt>
                    <dd class="col-7">{{ $user->role?->name ?? '–' }}</dd>
                </dl>
            </div>

            <div class="col-12 col-md-6">
                <dl class="row mb-0">
                    <dt class="col-5 text-muted">Phone</dt>
                    <dd class="col-7">{{ $user->phone ?: '–' }}</dd>

                    <dt class="col-5 text-muted">Status</dt>
                    <dd class="col-7">
                        <span class="badge {{ $user->status ? 'bg-success' : 'bg-secondary' }}">
                            {{ $user->status ? 'Active' : 'Inactive' }}
                        </span>
                    </dd>

                    <dt class="col-5 text-muted">Last login</dt>
                    <dd class="col-7">{{ optional($user->last_login)->format('d M Y H:i') ?? '–' }}</dd>
                </dl>
            </div>
        </div>

        <div class="mt-4 d-flex flex-wrap gap-2">
            @can('update', $user)
                <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-primary">Edit user</a>
            @endcan
            <a href="{{ route('admin.users.index') }}" class="btn btn-outline-secondary">Back to users</a>
        </div>
    </x-admin.card>
@endsection

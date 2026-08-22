@extends('layouts.admin')

@section('title', 'Ubah Pengguna')
@section('subtitle', 'Perbarui user information and permissions.')

@section('breadcrumb')
    <x-admin.breadcrumb :items="[
        ['label' => 'Dashboard', 'url' => route('dashboard')],
        ['label' => 'Users', 'url' => route('admin.users.index')],
        ['label' => $user->name],
        ['label' => 'Edit'],
    ]" />
@endsection

@section('content')
    <x-admin.card title="Edit user" subtitle="Change the user's profile, role, or status.">
        <form method="POST" action="{{ route('admin.users.update', $user) }}">
            @csrf
            @method('PUT')
            @include('admin.users._form', ['user' => $user, 'roles' => $roles])

            <div class="d-flex flex-wrap gap-2 mt-4">
                <button type="submit" class="btn btn-primary">Simpan changes</button>
                <a href="{{ route('admin.users.index') }}" class="btn btn-outline-secondary">Batal</a>
            </div>
        </form>
    </x-admin.card>
@endsection

@extends('layouts.admin')

@section('title', 'Create User')
@section('subtitle', 'Add a new administrator or operator account.')

@section('breadcrumb')
    <x-admin.breadcrumb :items="[
        ['label' => 'Dashboard', 'url' => route('dashboard')],
        ['label' => 'Users', 'url' => route('admin.users.index')],
        ['label' => 'Create'],
    ]" />
@endsection

@section('content')
    <x-admin.card title="Create user" subtitle="Fill in the user's profile and assignment details.">
        <form method="POST" action="{{ route('admin.users.store') }}">
            @csrf
            @include('admin.users._form', ['roles' => $roles])

            <div class="d-flex flex-wrap gap-2 mt-4">
                <button type="submit" class="btn btn-primary">Create user</button>
                <a href="{{ route('admin.users.index') }}" class="btn btn-outline-secondary">Cancel</a>
            </div>
        </form>
    </x-admin.card>
@endsection

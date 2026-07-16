@extends('layouts.admin')

@section('title', 'Create Download')
@section('subtitle', 'Add a new downloadable resource.')

@section('content')
    <form action="{{ route('admin.downloads.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('admin.downloads._form')
    </form>
@endsection

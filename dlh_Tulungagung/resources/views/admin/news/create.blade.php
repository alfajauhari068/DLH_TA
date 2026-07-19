@extends('layouts.admin')

@section('title', 'Tambah Berita')
@section('subtitle', 'Create and publish a new article for DLH Tulungagung website.')

@section('breadcrumb')
    <x-ui.breadcrumb :items="[
        ['label' => 'Dashboard', 'url' => route('dashboard')],
        ['label' => 'News', 'url' => route('admin.news.index')],
        ['label' => 'Tambah Berita'],
    ]" />
@endsection

@section('content')
    <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('admin.news.partials.form')
    </form>
@endsection

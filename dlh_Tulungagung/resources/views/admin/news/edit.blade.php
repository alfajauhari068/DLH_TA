@extends('layouts.admin')

@section('title', 'Ubah Berita')
@section('subtitle', 'Perbarui existing article information and content.')

@section('breadcrumb')
    <x-ui.breadcrumb :items="[
        ['label' => 'Dashboard', 'url' => route('dashboard')],
        ['label' => 'News', 'url' => route('admin.news.index')],
        ['label' => 'Ubah Berita'],
    ]" />
@endsection

@section('content')
    <form action="{{ route('admin.news.update', $news) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('admin.news.partials.form')
    </form>
@endsection

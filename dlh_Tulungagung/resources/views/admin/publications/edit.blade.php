@extends('layouts.admin')

@section('content')
    <h1 class="text-xl font-semibold">Ubah Publikasi</h1>

    <form action="{{ route('admin.publications.update', $publication) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('admin.publications._form')
    </form>
@endsection

@extends('layouts.admin')

@section('content')
    <h1 class="text-xl font-semibold">Tambah Publikasi</h1>

    <form action="{{ route('admin.publications.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('admin.publications._form')
    </form>
@endsection

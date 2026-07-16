@extends('layouts.admin')

@section('content')
    <h1 class="text-xl font-semibold">Edit News</h1>

    <form action="{{ route('admin.news.update', $news) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('admin.news._form')
    </form>
@endsection

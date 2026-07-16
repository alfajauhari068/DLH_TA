@extends('layouts.admin')

@section('content')
    <h1 class="text-xl font-semibold">Create News</h1>

    <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('admin.news._form')
    </form>
@endsection

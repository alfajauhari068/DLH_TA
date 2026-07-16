@extends('layouts.admin')

@section('content')
    <h1 class="text-xl font-semibold">{{ $publication->title }}</h1>
    <p class="text-sm text-gray-500">{{ $publication->summary }}</p>
    <div class="mt-4">{{ $publication->content }}</div>
@endsection

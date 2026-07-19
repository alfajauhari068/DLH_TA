@extends('layouts.admin')

@section('content')
    <h1 class="text-xl font-semibold">{{ $news->title }}</h1>

    <div class="mt-4">
        @if($news->featured_image)
            <img src="{{ $news->image_url }}" alt="{{ $news->title }}" class="mb-6 max-w-2xl w-full rounded-xl shadow-sm object-cover">
        @endif
        <p>{{ $news->excerpt }}</p>
        <div class="mt-4 prose max-w-none">{!! $news->content !!}</div>

        <dl class="mt-6">
            <dt>Status</dt>
            <dd>{{ ucfirst(array_search($news->status, config('cms.status')) ?: '') }}</dd>

            <dt>Author</dt>
            <dd>{{ optional($news->author)->name }}</dd>

            <dt>Published At</dt>
            <dd>{{ $news->published_at?->toDateTimeString() }}</dd>
        </dl>
    </div>

@endsection

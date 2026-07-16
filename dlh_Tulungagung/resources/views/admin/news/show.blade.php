@extends('layouts.admin')

@section('content')
    <h1 class="text-xl font-semibold">{{ $news->title }}</h1>

    <div class="mt-4">
        <p>{{ $news->excerpt }}</p>
        <div class="mt-4">{!! nl2br(e($news->content)) !!}</div>

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

@extends('layouts.admin')

@section('title', 'Program Details')
@section('subtitle', 'Inspect and manage this program entry.')

@section('content')
    <x-admin.card title="{{ $program->title }}">
        <dl class="row mb-0">
            <dt class="col-sm-3">Slug</dt>
            <dd class="col-sm-9">{{ $program->slug }}</dd>
            <dt class="col-sm-3">Status</dt>
            <dd class="col-sm-9">{{ $program->status }}</dd>
            <dt class="col-sm-3">Published</dt>
            <dd class="col-sm-9">{{ optional($program->published_at)->format('Y-m-d H:i') }}</dd>
            <dt class="col-sm-3">Excerpt</dt>
            <dd class="col-sm-9">{{ $program->excerpt }}</dd>
            <dt class="col-sm-3">Content</dt>
            <dd class="col-sm-9">{{ $program->content }}</dd>
        </dl>
    </x-admin.card>
@endsection

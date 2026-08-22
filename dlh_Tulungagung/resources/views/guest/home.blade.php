@extends('layouts.app')

@section('title', 'Beranda | DLH Tulungagung')

@section('content')
<main class="min-h-screen">
    @include('guest.sections.hero')
    @include('guest.sections.hero-stats')

    @include('guest.sections.services')

    @include('guest.sections.featured-news')

    @include('guest.sections.gallery')

    @include('guest.sections.statistics')

    @include('guest.sections.archives')

    @include('guest.sections.cta')
</main>
@endsection

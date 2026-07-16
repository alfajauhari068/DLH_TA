@extends('layouts.app')

@section('title', $page->title . ' | DLH Tulungagung')

@section('content')
    <x-hero 
        :title="$page->title" 
        :breadcrumbs="[['label' => $page->title]]"
    />

    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-sm p-6 md:p-10 border border-gray-100">
                <article class="prose prose-lg max-w-none text-gray-700">
                    {!! $page->content !!}
                </article>
            </div>
        </div>
    </section>
@endsection

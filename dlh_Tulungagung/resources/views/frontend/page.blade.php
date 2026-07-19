@extends('layouts.app')

@section('title', $page->title . ' | DLH Tulungagung')

@section('content')
    <x-hero 
        :title="$page->title" 
        :breadcrumbs="[['label' => $page->title]]"
    />

    <section class="py-5 bg-light">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                        <div class="card-body p-4 p-md-5">
                            <article class="prose prose-lg max-w-none text-gray-800" style="line-height: 1.8;">
                                {!! $page->content !!}
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.app')

@section('title', $newsItem->title . ' | DLH Tulungagung')

@section('content')
    <x-hero 
        :title="$newsItem->title" 
        :breadcrumbs="[['url' => url('/berita'), 'label' => 'Berita'], ['label' => 'Detail']]"
    />

    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-sm p-6 md:p-10 border border-gray-100">
                <div class="flex flex-wrap items-center gap-4 text-sm text-gray-500 mb-8 border-b border-gray-100 pb-6">
                    <span class="flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        {{ $newsItem->published_at ? \Carbon\Carbon::parse($newsItem->published_at)->translatedFormat('d F Y') : '-' }}
                    </span>
                    @if($newsItem->category)
                        <span class="flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path></svg>
                            {{ $newsItem->category->name }}
                        </span>
                    @endif
                    @if($newsItem->author)
                        <span class="flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            {{ $newsItem->author->name }}
                        </span>
                    @endif
                </div>

                @if($newsItem->featured_image)
                    <img src="{{ $newsItem->featured_image }}" alt="{{ $newsItem->title }}" class="w-full h-auto rounded-xl mb-8">
                @endif

                <article class="prose prose-lg max-w-none text-gray-700">
                    {!! $newsItem->content !!}
                </article>
            </div>
        </div>
    </section>
@endsection

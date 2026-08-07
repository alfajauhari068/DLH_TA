@extends('layouts.app')

@section('content')
    <x-guest.hero-banner 
        title="Hasil Pencarian" 
        subtitle="Cari informasi, berita, atau layanan." 
        :breadcrumbs="[['label' => 'Pencarian']]"
        badge="Pencarian Sistem"
    />

    <x-guest.page-container>
        <div class="max-w-3xl mx-auto mb-12 text-center">
            <form action="{{ url('/search') }}" method="GET" class="relative">
                <input type="text" name="q" placeholder="Cari informasi, berita, atau layanan..." class="w-full bg-white/90 backdrop-blur-md rounded-full py-4 pl-6 pr-16 soft-shadow border border-gray-100 focus:outline-none focus:ring-2 focus:ring-primary-green focus:border-transparent transition-all" value="{{ request('q') }}">
                <button type="submit" class="absolute right-2 top-2 bottom-2 bg-primary-green text-white rounded-full w-12 flex items-center justify-center hover:bg-primary-dark transition-colors">
                    <i class="bi bi-search"></i>
                </button>
            </form>
        </div>

        @if (isset($results) && $results->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($results as $result)
                    <x-guest.related-card 
                        :url="route('news.detail', $result->slug ?? '')"
                        :title="$result->title"
                        :summary="$result->summary ?? ''"
                        :thumbnail="$result->thumbnail ? Storage::url($result->thumbnail) : null"
                        badge="Hasil"
                        fallbackIcon="bi-newspaper"
                    />
                @endforeach
            </div>
        @else
            <x-guest.empty-state title="Hasil Tidak Ditemukan" description="Maaf, informasi yang Anda cari tidak ditemukan. Coba gunakan kata kunci lain." icon="bi-search" />
        @endif
    </x-guest.page-container>
@endsection

@extends('layouts.app')

@section('title', 'Beranda | DLH Tulungagung')

@section('content')
    <x-hero 
        title="Dinas Lingkungan Hidup Kabupaten Tulungagung" 
        subtitle="Mewujudkan lingkungan yang bersih, sehat, dan lestari untuk masyarakat Tulungagung." 
    />

    <!-- Layanan Cepat -->
    <section class="py-12 -mt-10 relative z-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <a href="{{ url('/halaman/pelayanan-publik') }}" class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center justify-center text-center hover:shadow-lg transition-shadow transform hover:-translate-y-1">
                    <div class="w-16 h-16 bg-primary/10 text-primary rounded-full flex items-center justify-center mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </div>
                    <h3 class="font-bold text-gray-800">Pelayanan Publik</h3>
                </a>
                <a href="{{ url('/halaman/pengaduan') }}" class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center justify-center text-center hover:shadow-lg transition-shadow transform hover:-translate-y-1">
                    <div class="w-16 h-16 bg-primary/10 text-primary rounded-full flex items-center justify-center mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="font-bold text-gray-800">Pengaduan</h3>
                </a>
                <a href="{{ url('/halaman/laboratorium') }}" class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center justify-center text-center hover:shadow-lg transition-shadow transform hover:-translate-y-1">
                    <div class="w-16 h-16 bg-primary/10 text-primary rounded-full flex items-center justify-center mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                    </div>
                    <h3 class="font-bold text-gray-800">Laboratorium Uji</h3>
                </a>
                <a href="{{ url('/dokumen') }}" class="bg-white rounded-xl shadow-md p-6 flex flex-col items-center justify-center text-center hover:shadow-lg transition-shadow transform hover:-translate-y-1">
                    <div class="w-16 h-16 bg-primary/10 text-primary rounded-full flex items-center justify-center mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                    <h3 class="font-bold text-gray-800">Dokumen Publik</h3>
                </a>
            </div>
        </div>
    </section>

    <!-- Berita Terbaru -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-end mb-10">
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-2">Berita Terbaru</h2>
                    <p class="text-gray-500">Informasi dan kegiatan terkini seputar Dinas Lingkungan Hidup</p>
                </div>
                <a href="{{ url('/berita') }}" class="hidden md:inline-flex items-center gap-2 text-primary font-semibold hover:text-primary-dark transition">
                    Lihat Semua <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse($latestNews as $item)
                    <x-card-news :news="$item" />
                @empty
                    <div class="col-span-3 text-center py-10 text-gray-500">Belum ada berita.</div>
                @endforelse
            </div>
            <div class="mt-8 text-center md:hidden">
                <a href="{{ url('/berita') }}" class="inline-flex items-center gap-2 text-primary font-semibold hover:text-primary-dark transition">
                    Lihat Semua Berita
                </a>
            </div>
        </div>
    </section>

    <!-- Galeri Singkat -->
    <section class="py-16 bg-gray-50 border-t border-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">Galeri Kegiatan</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @forelse($galleries as $item)
                    <x-card-gallery :item="$item" />
                @empty
                    <div class="col-span-4 text-center py-10 text-gray-500">Belum ada galeri.</div>
                @endforelse
            </div>
            <div class="mt-10 text-center">
                <a href="{{ url('/galeri') }}" class="inline-block bg-primary text-white font-semibold py-3 px-8 rounded-full shadow hover:bg-primary-dark hover:shadow-lg transition">Lihat Galeri Selengkapnya</a>
            </div>
        </div>
    </section>
@endsection

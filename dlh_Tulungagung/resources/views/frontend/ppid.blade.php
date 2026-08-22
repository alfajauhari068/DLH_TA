@extends('layouts.app')

@section('title', 'Layanan PPID | DLH Tulungagung')

@section('content')
    <x-guest.hero-banner 
        title="Layanan Informasi Publik (PPID)" 
        subtitle="Pejabat Pengelola Informasi dan Dokumentasi (PPID) Dinas Lingkungan Hidup Kabupaten Tulungagung." 
        :breadcrumbs="[['label' => 'PPID']]"
        badge="Informasi Publik"
        :primaryAction="['url' => '#permohonan', 'label' => 'Ajukan Permohonan', 'icon' => 'bi-pencil-square']"
    />

    <x-guest.page-container>
        <x-guest.page-layout :hasSidebar="false">
            <x-slot name="main">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
                    <x-guest.content-card class="flex-1">
                        <x-guest.section-header title="Apa itu PPID?" icon="bi-info-circle" />
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            PPID adalah kepanjangan dari Pejabat Pengelola Informasi dan Dokumentasi, yang berfungsi sebagai pengelola dan penyampai dokumen yang dimiliki oleh Badan Publik sesuai dengan amanat UU No 14/2008 tentang Keterbukaan Informasi Publik.
                        </p>
                    </x-guest.content-card>

                    <div class="bg-white/90 backdrop-blur-xl rounded-[32px] p-8 border border-white/50 soft-shadow">
                        <h3 class="text-2xl font-bold text-primary-dark mb-6 flex items-center gap-2">
                            <i class="bi bi-shield-check text-primary-green"></i>
                            Asas Keterbukaan Informasi
                        </h3>
                        <ul class="space-y-6">
                            <li class="flex items-start gap-4">
                                <div class="w-8 h-8 rounded-full bg-light-green text-primary-green flex items-center justify-center shrink-0 mt-0.5">
                                    <i class="bi bi-check-lg"></i>
                                </div>
                                <span class="text-gray-700 leading-relaxed font-medium">Setiap Informasi Publik bersifat terbuka dan dapat diakses oleh setiap Pengguna Informasi Publik.</span>
                            </li>
                            <li class="flex items-start gap-4">
                                <div class="w-8 h-8 rounded-full bg-light-green text-primary-green flex items-center justify-center shrink-0 mt-0.5">
                                    <i class="bi bi-check-lg"></i>
                                </div>
                                <span class="text-gray-700 leading-relaxed font-medium">Informasi Publik yang dikecualikan bersifat ketat dan terbatas.</span>
                            </li>
                            <li class="flex items-start gap-4">
                                <div class="w-8 h-8 rounded-full bg-light-green text-primary-green flex items-center justify-center shrink-0 mt-0.5">
                                    <i class="bi bi-check-lg"></i>
                                </div>
                                <span class="text-gray-700 leading-relaxed font-medium">Setiap Informasi Publik harus dapat diperoleh setiap Pemohon dengan cepat, tepat waktu, biaya ringan, dan cara sederhana.</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div id="permohonan">
                    <x-guest.section-header 
                        title="Tata Cara Permohonan Informasi" 
                        subtitle="Alur pengajuan permohonan informasi publik ke PPID DLH Tulungagung." 
                        icon="bi-diagram-3"
                    />

                    <div class="grid grid-cols-1 md:grid-cols-4 gap-8 relative mt-8">
                        <!-- Connecting Line (Desktop) -->
                        <div class="hidden md:block absolute top-12 left-0 w-full h-0.5 bg-primary-green/20 -z-10"></div>
                        
                        <!-- Step 1 -->
                        <div class="text-center group">
                            <div class="w-24 h-24 bg-white/90 backdrop-blur-xl border-4 border-primary-green/20 text-primary-green rounded-[24px] flex flex-col items-center justify-center mx-auto mb-6 relative soft-shadow group-hover:-translate-y-2 transition-all duration-300">
                                <span class="text-3xl font-black">1</span>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-3 text-xl">Mengisi Formulir</h4>
                            <p class="text-base text-gray-500 leading-relaxed">Pemohon mengisi formulir permohonan informasi dan melampirkan fotokopi KTP/Identitas diri.</p>
                        </div>
                        
                        <!-- Step 2 -->
                        <div class="text-center group">
                            <div class="w-24 h-24 bg-white/90 backdrop-blur-xl border-4 border-primary-green/20 text-primary-green rounded-[24px] flex flex-col items-center justify-center mx-auto mb-6 relative soft-shadow group-hover:-translate-y-2 transition-all duration-300">
                                <span class="text-3xl font-black">2</span>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-3 text-xl">Pencatatan</h4>
                            <p class="text-base text-gray-500 leading-relaxed">Petugas PPID mencatat permohonan ke dalam buku register dan memberikan tanda bukti penerimaan.</p>
                        </div>
                        
                        <!-- Step 3 -->
                        <div class="text-center group">
                            <div class="w-24 h-24 bg-white/90 backdrop-blur-xl border-4 border-primary-green/20 text-primary-green rounded-[24px] flex flex-col items-center justify-center mx-auto mb-6 relative soft-shadow group-hover:-translate-y-2 transition-all duration-300">
                                <span class="text-3xl font-black">3</span>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-3 text-xl">Proses</h4>
                            <p class="text-base text-gray-500 leading-relaxed">PPID memproses permohonan informasi sesuai dengan ketentuan (maksimal 10 hari kerja).</p>
                        </div>
                        
                        <!-- Step 4 -->
                        <div class="text-center group">
                            <div class="w-24 h-24 bg-white/90 backdrop-blur-xl border-4 border-primary-green/20 text-primary-green rounded-[24px] flex flex-col items-center justify-center mx-auto mb-6 relative soft-shadow group-hover:-translate-y-2 transition-all duration-300">
                                <span class="text-3xl font-black">4</span>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-3 text-xl">Pemberitahuan</h4>
                            <p class="text-base text-gray-500 leading-relaxed">Pemohon menerima pemberitahuan tertulis dan mengambil informasi yang diminta.</p>
                        </div>
                    </div>
                </div>
            </x-slot>
        </x-guest.page-layout>
    </x-guest.page-container>

    <x-guest.cta-banner 
        title="Butuh Bantuan Lebih Lanjut?" 
        subtitle="Silakan hubungi petugas layanan PPID kami untuk informasi lebih detail." 
        :primaryAction="['url' => route('contact'), 'label' => 'Hubungi Kami', 'icon' => 'bi-telephone']" 
    />
@endsection

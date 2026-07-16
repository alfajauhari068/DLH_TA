@extends('layouts.app')

@section('title', 'Layanan PPID | DLH Tulungagung')

@section('content')
    <x-hero 
        title="Layanan Informasi Publik (PPID)" 
        subtitle="Pejabat Pengelola Informasi dan Dokumentasi (PPID) Dinas Lingkungan Hidup Kabupaten Tulungagung." 
        :breadcrumbs="[['label' => 'PPID']]"
    />

    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 md:p-12 mb-12">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                        <div>
                            <h2 class="text-3xl font-bold text-gray-800 mb-4">Apa itu PPID?</h2>
                            <p class="text-gray-600 mb-6 leading-relaxed">
                                PPID adalah kepanjangan dari Pejabat Pengelola Informasi dan Dokumentasi, yang berfungsi sebagai pengelola dan penyampai dokumen yang dimiliki oleh Badan Publik sesuai dengan amanat UU No 14/2008 tentang Keterbukaan Informasi Publik.
                            </p>
                            <a href="#permohonan" class="btn btn-primary px-6 py-3 rounded-xl font-semibold shadow-soft hover:shadow-hover hover:-translate-y-1 transition-all">
                                Ajukan Permohonan Informasi
                            </a>
                        </div>
                        <div class="bg-primary/5 rounded-2xl p-8 border border-primary/10">
                            <h3 class="text-xl font-bold text-gray-800 mb-4">Asas Keterbukaan Informasi</h3>
                            <ul class="space-y-4">
                                <li class="flex items-start gap-3">
                                    <i class="bi bi-check-circle-fill text-success mt-1"></i>
                                    <span class="text-gray-700">Setiap Informasi Publik bersifat terbuka dan dapat diakses oleh setiap Pengguna Informasi Publik.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <i class="bi bi-check-circle-fill text-success mt-1"></i>
                                    <span class="text-gray-700">Informasi Publik yang dikecualikan bersifat ketat dan terbatas.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <i class="bi bi-check-circle-fill text-success mt-1"></i>
                                    <span class="text-gray-700">Setiap Informasi Publik harus dapat diperoleh setiap Pemohon dengan cepat, tepat waktu, biaya ringan, dan cara sederhana.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div id="permohonan" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 md:p-12">
                    <div class="text-center mb-10">
                        <h2 class="text-2xl font-bold text-gray-800 mb-3">Tata Cara Permohonan Informasi</h2>
                        <p class="text-gray-500">Alur pengajuan permohonan informasi publik ke PPID DLH Tulungagung.</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 relative">
                        <!-- Connecting Line (Desktop) -->
                        <div class="hidden md:block absolute top-12 left-0 w-full h-0.5 bg-gray-100 -z-10"></div>
                        
                        <!-- Step 1 -->
                        <div class="text-center">
                            <div class="w-24 h-24 bg-white border-4 border-primary/20 text-primary rounded-full flex flex-col items-center justify-center mx-auto mb-4 relative shadow-sm">
                                <span class="text-xl font-bold">1</span>
                            </div>
                            <h4 class="font-bold text-gray-800 mb-2">Mengisi Formulir</h4>
                            <p class="text-sm text-gray-500">Pemohon mengisi formulir permohonan informasi dan melampirkan fotokopi KTP/Identitas diri.</p>
                        </div>
                        
                        <!-- Step 2 -->
                        <div class="text-center">
                            <div class="w-24 h-24 bg-white border-4 border-primary/20 text-primary rounded-full flex flex-col items-center justify-center mx-auto mb-4 relative shadow-sm">
                                <span class="text-xl font-bold">2</span>
                            </div>
                            <h4 class="font-bold text-gray-800 mb-2">Pencatatan</h4>
                            <p class="text-sm text-gray-500">Petugas PPID mencatat permohonan ke dalam buku register dan memberikan tanda bukti penerimaan.</p>
                        </div>
                        
                        <!-- Step 3 -->
                        <div class="text-center">
                            <div class="w-24 h-24 bg-white border-4 border-primary/20 text-primary rounded-full flex flex-col items-center justify-center mx-auto mb-4 relative shadow-sm">
                                <span class="text-xl font-bold">3</span>
                            </div>
                            <h4 class="font-bold text-gray-800 mb-2">Proses</h4>
                            <p class="text-sm text-gray-500">PPID memproses permohonan informasi sesuai dengan ketentuan (maksimal 10 hari kerja).</p>
                        </div>
                        
                        <!-- Step 4 -->
                        <div class="text-center">
                            <div class="w-24 h-24 bg-white border-4 border-primary/20 text-primary rounded-full flex flex-col items-center justify-center mx-auto mb-4 relative shadow-sm">
                                <span class="text-xl font-bold">4</span>
                            </div>
                            <h4 class="font-bold text-gray-800 mb-2">Pemberitahuan</h4>
                            <p class="text-sm text-gray-500">Pemohon menerima pemberitahuan tertulis dan mengambil informasi yang diminta.</p>
                        </div>
                    </div>

                    <div class="mt-12 text-center bg-gray-50 p-6 rounded-xl border border-gray-100">
                        <h4 class="font-bold text-gray-800 mb-2">Butuh Bantuan?</h4>
                        <p class="text-gray-600 mb-4">Silakan hubungi petugas layanan PPID kami untuk informasi lebih lanjut.</p>
                        <a href="{{ url('/kontak') }}" class="btn btn-outline-primary px-6 py-2 rounded-lg font-semibold">Hubungi Kami</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

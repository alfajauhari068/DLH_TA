@extends('layouts.app')

@section('title', 'Kontak | DLH Tulungagung')

@section('content')
    <x-guest.hero-banner 
        title="Hubungi Kami" 
        subtitle="Layanan informasi, pengaduan, dan pusat bantuan Dinas Lingkungan Hidup." 
        :breadcrumbs="[['label' => 'Kontak']]"
        badge="Pusat Bantuan"
    />

    <x-guest.page-container>
        <x-guest.page-layout :hasSidebar="false">
            <x-slot name="main">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 max-w-5xl mx-auto mb-16">
                    <!-- Info Kontak -->
                    <div>
                        <x-guest.section-header title="Informasi Kontak" icon="bi-headset" />
                        
                        <div class="space-y-6 mt-8">
                            <div class="flex items-start gap-4 p-4 bg-gray-50 rounded-2xl border border-gray-100 hover:border-emerald-200 transition-colors">
                                <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center shrink-0">
                                    <i class="bi bi-geo-alt text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900 mb-1">Alamat Kantor</h4>
                                    <p class="text-sm text-gray-600 leading-relaxed">Jl. Pahlawan No. 1, Kedungwaru, Kabupaten Tulungagung, Jawa Timur 66224</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4 p-4 bg-gray-50 rounded-2xl border border-gray-100 hover:border-emerald-200 transition-colors">
                                <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center shrink-0">
                                    <i class="bi bi-telephone text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900 mb-1">Telepon</h4>
                                    <p class="text-sm text-gray-600 leading-relaxed">(0355) 123456</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4 p-4 bg-gray-50 rounded-2xl border border-gray-100 hover:border-emerald-200 transition-colors">
                                <div class="w-12 h-12 bg-purple-100 text-purple-600 rounded-xl flex items-center justify-center shrink-0">
                                    <i class="bi bi-envelope text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900 mb-1">Email</h4>
                                    <p class="text-sm text-gray-600 leading-relaxed">dlh@tulungagung.go.id</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Form Pesan -->
                    <div class="bg-white rounded-3xl shadow-lg border border-gray-100 p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Kirim Pesan</h3>
                        <p class="text-gray-500 text-sm mb-6">Punya pertanyaan atau pengaduan? Kirim pesan langsung kepada kami.</p>
                        
                        <form action="#" method="POST" class="space-y-5">
                            @csrf
                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-2">Nama Lengkap</label>
                                <input type="text" name="name" class="w-full rounded-xl border-gray-300 focus:border-emerald-500 focus:ring focus:ring-emerald-200 transition-shadow bg-gray-50 focus:bg-white px-4 py-3" required placeholder="Masukkan nama lengkap">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-2">Email</label>
                                <input type="email" name="email" class="w-full rounded-xl border-gray-300 focus:border-emerald-500 focus:ring focus:ring-emerald-200 transition-shadow bg-gray-50 focus:bg-white px-4 py-3" required placeholder="Masukkan alamat email">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-2">Pesan</label>
                                <textarea name="message" rows="4" class="w-full rounded-xl border-gray-300 focus:border-emerald-500 focus:ring focus:ring-emerald-200 transition-shadow bg-gray-50 focus:bg-white px-4 py-3 resize-none" required placeholder="Tuliskan pesan Anda di sini..."></textarea>
                            </div>
                            <button type="submit" class="w-full bg-emerald-600 text-white font-bold py-3.5 rounded-xl shadow-lg shadow-emerald-200 hover:bg-emerald-700 hover:-translate-y-0.5 transition-all flex items-center justify-center gap-2">
                                <i class="bi bi-send-fill"></i>
                                Kirim Pesan Sekarang
                            </button>
                        </form>
                    </div>
                </div>

                <div class="max-w-5xl mx-auto rounded-3xl overflow-hidden shadow-sm border border-gray-200 h-[400px]">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.5694857434195!2d111.902264!3d-8.0432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78e2e2832822a1%3A0x6b1ed861ea55c275!2sDinas%20Lingkungan%20Hidup%20Kabupaten%20Tulungagung!5e0!3m2!1sen!2sid!4v1715000000000!5m2!1sen!2sid" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </x-slot>
        </x-guest.page-layout>
    </x-guest.page-container>
@endsection

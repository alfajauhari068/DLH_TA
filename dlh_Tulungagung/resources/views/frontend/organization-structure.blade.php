@extends('layouts.app')

@section('title', 'Struktur Organisasi | DLH Tulungagung')

@section('content')
    <x-guest.hero-banner 
        title="Struktur Organisasi" 
        subtitle="Mengenal susunan struktur dan dokumen bagan kepengurusan Dinas Lingkungan Hidup Kabupaten Tulungagung." 
        :breadcrumbs="[['label' => 'Struktur Organisasi']]"
        badge="Profil Instansi"
    />

    <x-guest.page-container>
        <x-guest.page-layout :hasSidebar="false">
            <x-slot name="main">
                <div class="max-w-5xl mx-auto space-y-12">
                    
                    @if(!$structure || (!$structure->image && !$structure->description && !$structure->legal_basis))
                        <x-guest.empty-state 
                            icon="bi-diagram-3" 
                            title="Struktur Organisasi Belum Tersedia" 
                            description="Data bagan dan regulasi struktur organisasi sedang dalam proses pembaruan oleh admin." 
                        />
                    @else
                        <!-- 1. Interactive Image Viewer Section -->
                        @if($structure->image)
                            <div class="space-y-4">
                                <div class="flex flex-wrap items-center justify-between gap-4">
                                    <h3 class="text-xl font-bold text-gray-900 flex items-center gap-2">
                                        <i class="bi bi-eye text-primary"></i>
                                        Bagan Struktur Organisasi
                                    </h3>
                                    
                                    <div class="flex items-center gap-2">
                                        <a href="{{ route('officials') }}" class="inline-flex items-center gap-2 px-4.5 py-2 bg-emerald-50 hover:bg-emerald-100 text-emerald-800 font-semibold text-xs md:text-sm rounded-full transition-all duration-300">
                                            <i class="bi bi-people"></i>
                                            Lihat Profil Pejabat
                                        </a>
                                        @if($structure->pdf)
                                            <a href="{{ asset('storage/' . $structure->pdf) }}" download class="inline-flex items-center gap-2 px-4.5 py-2 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold text-xs md:text-sm rounded-full shadow transition-all duration-300">
                                                <i class="bi bi-file-earmark-pdf"></i>
                                                Unduh PDF Resmi
                                            </a>
                                        @endif
                                    </div>
                                </div>

                                <!-- Interactive Pan/Zoom Container -->
                                <div id="viewer-container" class="relative w-full h-[400px] md:h-[620px] overflow-hidden bg-gray-50 border border-gray-200/60 rounded-[32px] soft-shadow flex items-center justify-center group/viewer">
                                    
                                    <!-- Image Element -->
                                    <img id="viewer-image" 
                                         src="{{ asset('storage/' . $structure->image) }}" 
                                         alt="Bagan Struktur Organisasi DLH Tulungagung" 
                                         class="max-w-full max-h-full object-contain cursor-grab active:cursor-grabbing select-none transition-transform duration-100 ease-out origin-center" 
                                         style="transform: scale(1) translate(0px, 0px);"
                                         draggable="false">
                                    
                                    <!-- Zoom / Pan Overlay Help on Hover -->
                                    <div class="absolute top-4 left-4 bg-black/60 backdrop-blur-sm text-white px-3 py-1.5 rounded-full text-[11px] font-medium pointer-events-none opacity-0 group-hover/viewer:opacity-100 transition-opacity duration-300 flex items-center gap-1.5">
                                        <i class="bi bi-info-circle"></i>
                                        <span>Gunakan klik & seret untuk menggeser gambar</span>
                                    </div>

                                    <!-- Floating Toolbars -->
                                    <div class="absolute bottom-6 right-6 flex items-center gap-2 bg-white/90 backdrop-blur-md px-3.5 py-2 rounded-full shadow-lg border border-gray-100 z-10">
                                        <button id="btn-zoom-in" class="w-9 h-9 rounded-full bg-gray-50 hover:bg-emerald-50 text-gray-700 hover:text-emerald-700 flex items-center justify-center transition-all" title="Perbesar">
                                            <i class="bi bi-zoom-in text-base"></i>
                                        </button>
                                        <button id="btn-zoom-out" class="w-9 h-9 rounded-full bg-gray-50 hover:bg-emerald-50 text-gray-700 hover:text-emerald-700 flex items-center justify-center transition-all" title="Perkecil">
                                            <i class="bi bi-zoom-out text-base"></i>
                                        </button>
                                        <button id="btn-zoom-reset" class="w-9 h-9 rounded-full bg-gray-50 hover:bg-emerald-50 text-gray-700 hover:text-emerald-700 flex items-center justify-center transition-all" title="Reset Ukuran">
                                            <i class="bi bi-arrows-angle-contract text-sm"></i>
                                        </button>
                                        <div class="w-px h-6 bg-gray-200 mx-1"></div>
                                        <button id="btn-fullscreen" class="w-9 h-9 rounded-full bg-gray-50 hover:bg-emerald-50 text-gray-700 hover:text-emerald-700 flex items-center justify-center transition-all" title="Layar Penuh">
                                            <i class="bi bi-fullscreen text-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <!-- 2. Description (TinyMCE Content) -->
                        @if($structure->description)
                            <div class="bg-white/80 backdrop-blur-xl border border-gray-100 rounded-3xl p-6 md:p-10 soft-shadow space-y-6">
                                <h3 class="text-xl font-bold text-gray-900 border-l-4 border-emerald-600 pl-4">
                                    Penjelasan Struktur
                                </h3>
                                <div class="prose max-w-none text-gray-600 leading-relaxed text-[15px] md:text-base">
                                    {!! $structure->description !!}
                                </div>
                            </div>
                        @endif

                        <!-- 3. Legal Basis (Dasar Hukum) -->
                        @if($structure->legal_basis)
                            <div class="bg-white/80 backdrop-blur-xl border border-gray-100 rounded-3xl p-6 md:p-10 soft-shadow space-y-6">
                                <h3 class="text-xl font-bold text-gray-900 border-l-4 border-emerald-600 pl-4">
                                    Dasar Hukum
                                </h3>
                                <div class="prose max-w-none text-gray-600 leading-relaxed text-[15px] md:text-base">
                                    {!! $structure->legal_basis !!}
                                </div>
                            </div>
                        @endif

                        <!-- 4. Update Log & Footer Actions -->
                        <div class="flex flex-col sm:flex-row items-center justify-between gap-6 pt-4 border-t border-gray-100">
                            <div class="text-xs text-gray-400 font-medium">
                                <i class="bi bi-clock-history me-1.5"></i>
                                Terakhir diperbarui: {{ $structure->updated_at ? $structure->updated_at->translatedFormat('d F Y') : '-' }}
                            </div>
                            
                            <x-guest.share-buttons :title="$structure->title" />
                        </div>
                    @endif

                </div>
            </x-slot>
        </x-guest.page-layout>
    </x-guest.page-container>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const container = document.getElementById('viewer-container');
        const img = document.getElementById('viewer-image');
        
        if (container && img) {
            let scale = 1;
            let translateX = 0;
            let translateY = 0;
            
            let isDragging = false;
            let startX = 0;
            let startY = 0;

            const updateTransform = () => {
                img.style.transform = `scale(${scale}) translate(${translateX}px, ${translateY}px)`;
            };

            // Drag Panning Logic
            container.addEventListener('mousedown', (e) => {
                // Only drag with left click
                if (e.button !== 0) return;
                isDragging = true;
                container.classList.add('cursor-grabbing');
                startX = e.clientX - translateX;
                startY = e.clientY - translateY;
                e.preventDefault();
            });

            window.addEventListener('mousemove', (e) => {
                if (!isDragging) return;
                translateX = e.clientX - startX;
                translateY = e.clientY - startY;
                updateTransform();
            });

            window.addEventListener('mouseup', () => {
                if (isDragging) {
                    isDragging = false;
                    container.classList.remove('cursor-grabbing');
                }
            });

            // Touch support for mobile
            container.addEventListener('touchstart', (e) => {
                if (e.touches.length === 1) {
                    isDragging = true;
                    startX = e.touches[0].clientX - translateX;
                    startY = e.touches[0].clientY - translateY;
                }
            });

            container.addEventListener('touchmove', (e) => {
                if (!isDragging || e.touches.length !== 1) return;
                translateX = e.touches[0].clientX - startX;
                translateY = e.touches[0].clientY - startY;
                updateTransform();
            });

            container.addEventListener('touchend', () => {
                isDragging = false;
            });

            // Zoom In
            document.getElementById('btn-zoom-in').addEventListener('click', () => {
                if (scale < 5) {
                    scale += 0.25;
                    updateTransform();
                }
            });

            // Zoom Out
            document.getElementById('btn-zoom-out').addEventListener('click', () => {
                if (scale > 0.5) {
                    scale -= 0.25;
                    updateTransform();
                }
            });

            // Reset
            document.getElementById('btn-zoom-reset').addEventListener('click', () => {
                scale = 1;
                translateX = 0;
                translateY = 0;
                updateTransform();
            });

            // Fullscreen Toggle
            const fullscreenBtn = document.getElementById('btn-fullscreen');
            fullscreenBtn.addEventListener('click', () => {
                if (!document.fullscreenElement) {
                    container.requestFullscreen().catch(err => {
                        console.error(`Error attempting to enable fullscreen: ${err.message}`);
                    });
                } else {
                    document.exitFullscreen();
                }
            });

            // Update fullscreen icon dynamically
            document.addEventListener('fullscreenchange', () => {
                const icon = fullscreenBtn.querySelector('i');
                if (document.fullscreenElement) {
                    icon.className = 'bi bi-fullscreen-exit text-sm';
                    container.classList.add('h-screen', 'rounded-none');
                    // Add dark bg for immersive fullscreen
                    container.style.backgroundColor = '#1e293b'; 
                } else {
                    icon.className = 'bi bi-fullscreen text-sm';
                    container.classList.remove('h-screen', 'rounded-none');
                    container.style.backgroundColor = '';
                }
            });
        }
    });
</script>
@endpush

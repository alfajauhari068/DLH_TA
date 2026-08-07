@extends('layouts.app')

@section('title', $gallery->name . ' - Galeri | DLH Tulungagung')

@section('content')
    <x-guest.hero-banner 
        :title="$gallery->name" 
        :subtitle="$gallery->description ?? 'Dokumentasi kegiatan'" 
        :breadcrumbs="[['label' => 'Galeri', 'url' => route('galleries')], ['label' => $gallery->name]]"
        :background="$gallery->image_url"
        badge="Album Galeri"
    />

    <x-guest.page-container>
        <x-guest.page-layout :hasSidebar="false">
            <x-slot name="main">
                @if($gallery->items->isEmpty())
                    <x-guest.empty-state 
                        icon="bi-images" 
                        title="Belum Ada Foto" 
                        description="Galeri ini belum memiliki dokumentasi foto di dalamnya." 
                        :primaryAction="['url' => route('galleries'), 'label' => 'Kembali ke Galeri']"
                    />
                @else
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                        @foreach($gallery->items as $item)
                            <div class="cursor-pointer gallery-item transition-all hover:opacity-95" 
                                 data-src="{{ Storage::url($item->image) }}" 
                                 data-caption="{{ $item->caption ?? $gallery->name }}">
                                <x-guest.image-card 
                                    :src="Storage::url($item->image)"
                                    :alt="$item->caption ?? 'Gallery Image'"
                                    :caption="$item->caption"
                                    aspect="aspect-square"
                                />
                            </div>
                        @endforeach
                    </div>
                @endif
                
                <div class="mt-12 border-t border-gray-100 pt-8 flex flex-col md:flex-row items-center justify-between gap-6">
                    <x-guest.button :href="route('galleries')" variant="outline" icon="bi-arrow-left">
                        Kembali ke Galeri
                    </x-guest.button>
                    
                    <x-guest.share-buttons :title="$gallery->name" />
                </div>
            </x-slot>
        </x-guest.page-layout>
    </x-guest.page-container>

    <!-- Self-contained Premium Lightbox Modal for Image Preview -->
    <div id="lightboxModal" class="fixed inset-0 z-[9999] hidden bg-black/90 backdrop-blur-md flex flex-col items-center justify-center p-4 transition-all duration-300 opacity-0" style="backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px);">
        <!-- Close Button -->
        <button id="lightboxClose" type="button" class="absolute top-4 right-4 text-white hover:text-emerald-400 bg-white/10 hover:bg-white/20 p-3 rounded-full transition-all duration-300 z-50 cursor-pointer border border-white/10" aria-label="Close">
            <i class="bi bi-x-lg text-xl md:text-2xl"></i>
        </button>

        <!-- Modal Content Container -->
        <div class="relative max-w-5xl w-full flex flex-col items-center justify-center">
            <!-- Navigation (Prev/Next) optional but let's keep it simple and focused -->
            <img id="lightboxImage" src="" class="img-fluid rounded-2xl max-h-[80vh] max-w-full object-contain shadow-2xl border-4 border-white/90 transform scale-95 transition-transform duration-300" alt="Preview">
            <div id="lightboxCaption" class="text-white text-center mt-4 font-semibold text-sm md:text-base drop-shadow px-5 py-2.5 bg-emerald-950/80 border border-emerald-800/30 backdrop-blur-md rounded-full inline-block max-w-[90%] mx-auto"></div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const galleryItems = document.querySelectorAll('.gallery-item');
        const modal = document.getElementById('lightboxModal');
        const closeBtn = document.getElementById('lightboxClose');
        const lightboxImage = document.getElementById('lightboxImage');
        const lightboxCaption = document.getElementById('lightboxCaption');

        if (modal && lightboxImage && lightboxCaption) {
            // Function to open lightbox
            galleryItems.forEach(item => {
                item.addEventListener('click', function(e) {
                    e.preventDefault();
                    const src = this.getAttribute('data-src');
                    const caption = this.getAttribute('data-caption');

                    // Set content
                    lightboxImage.src = src;
                    if (caption) {
                        lightboxCaption.textContent = caption;
                        lightboxCaption.style.display = 'inline-block';
                    } else {
                        lightboxCaption.style.display = 'none';
                    }

                    // Show modal with transition
                    modal.classList.remove('hidden');
                    // Small delay to trigger animation
                    setTimeout(() => {
                        modal.classList.add('opacity-100');
                        lightboxImage.classList.remove('scale-95');
                        lightboxImage.classList.add('scale-100');
                    }, 20);
                });
            });

            // Function to close lightbox
            const closeLightbox = function() {
                modal.classList.remove('opacity-100');
                lightboxImage.classList.remove('scale-100');
                lightboxImage.classList.add('scale-95');
                setTimeout(() => {
                    modal.classList.add('hidden');
                    lightboxImage.src = '';
                }, 300);
            };

            if (closeBtn) {
                closeBtn.addEventListener('click', closeLightbox);
            }

            // Close on clicking background
            modal.addEventListener('click', function(e) {
                if (e.target === modal || e.target.closest('#lightboxClose') || e.target.id === 'lightboxModal') {
                    closeLightbox();
                }
            });

            // Close on escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
                    closeLightbox();
                }
            });
        }
    });
</script>
@endpush

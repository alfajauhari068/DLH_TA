<section class="bg-dark position-relative overflow-hidden pt-5">
    <div class="container pt-5 pb-4">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-4 gap-3">
            <div>
                <span class="badge bg-white bg-opacity-10 text-white mb-3 px-3 py-2 fw-bold rounded-pill text-uppercase letter-spacing-1">Galeri Visual</span>
                <h2 class="display-5 fw-bolder mb-0 text-white">Bingkai Lestari</h2>
                <p class="text-white-50 fs-5 mt-2 mb-0">Dokumentasi langkah nyata kami untuk bumi Tulungagung.</p>
            </div>
            <a href="{{ url('/galeri') }}" class="btn btn-outline-light fw-bold rounded-pill px-4 py-2 hover-bg-white transition-all">
                Semua Galeri <i class="bi bi-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
    
    <!-- Edge-to-edge / Full bleed asymmetrical gallery -->
    <div class="container-fluid px-0">
        <div class="row g-1">
            @php
                $displayGalleries = collect([]);
                if (isset($galleries) && $galleries->count() > 0) {
                    $displayGalleries = $galleries->take(5);
                }
                
                // Demo images from Unsplash for the Premium Eco feel
                $demoImages = [
                    'https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?q=80&w=1000&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1472214103451-9374bd1c798e?q=80&w=1000&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1518173946687-a4c8892bbd9f?q=80&w=1000&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1448375240586-882707db888b?q=80&w=1000&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1503756234508-e32369269deb?q=80&w=1000&auto=format&fit=crop'
                ];

                $needed = 5 - $displayGalleries->count();
                if ($needed > 0) {
                    for ($i = 0; $i < $needed; $i++) {
                        $displayGalleries->push((object)[
                            'title' => 'Inisiatif Lingkungan ' . ($i + 1),
                            'album_name' => 'Program Hijau',
                            'image_url' => $demoImages[$i]
                        ]);
                    }
                }
            @endphp

            <!-- Large Featured Image (Left side) -->
            <div class="col-lg-6">
                @php $first = $displayGalleries->first(); @endphp
                <div class="position-relative overflow-hidden bg-dark group cursor-pointer w-100" style="height: 100%; min-height: 500px;">
                    <img src="{{ $first->image_url }}" alt="{{ $first->title }}" class="w-100 h-100 object-fit-cover group-hover-scale transition-all opacity-75">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-end p-5 transition-all group-hover-overlay" style="background: linear-gradient(to top, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0) 60%);">
                        <span class="badge bg-success mb-3 align-self-start px-3 py-2 rounded-pill fw-bold text-uppercase letter-spacing-1">{{ $first->album_name ?? 'Dokumentasi' }}</span>
                        <h3 class="text-white display-6 fw-bolder mb-0 text-shadow group-hover-translate-up transition-all">{{ $first->title }}</h3>
                    </div>
                </div>
            </div>

            <!-- Right side grid (2x2) -->
            <div class="col-lg-6">
                <div class="row g-1 h-100">
                    @foreach($displayGalleries->skip(1)->take(4) as $item)
                    <div class="col-6">
                        <div class="position-relative overflow-hidden bg-dark group cursor-pointer w-100 h-100" style="min-height: 250px;">
                            <img src="{{ $item->image_url }}" alt="{{ $item->title }}" class="w-100 h-100 object-fit-cover group-hover-scale transition-all opacity-75">
                            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-end p-4 transition-all group-hover-overlay" style="background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0) 60%);">
                                <h4 class="text-white fs-5 fw-bold mb-1 text-shadow group-hover-translate-up transition-all">{{ Str::limit($item->title, 40) }}</h4>
                                <p class="text-white-50 small mb-0 fw-medium group-hover-translate-up-delay transition-all"><i class="bi bi-folder2-open me-1"></i> {{ $item->album_name ?? 'Dokumentasi' }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    .transition-all { transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1); }
    .group-hover-scale { transition: transform 0.8s cubic-bezier(0.4, 0, 0.2, 1); }
    .group:hover .group-hover-scale { transform: scale(1.08); filter: brightness(1.1); }
    .group:hover .group-hover-overlay { background: linear-gradient(to top, rgba(20, 92, 37, 0.95) 0%, rgba(0,0,0,0) 70%) !important; }
    
    .group-hover-translate-up { transform: translateY(10px); }
    .group-hover-translate-up-delay { transform: translateY(15px); opacity: 0; }
    
    .group:hover .group-hover-translate-up { transform: translateY(0); }
    .group:hover .group-hover-translate-up-delay { transform: translateY(0); opacity: 1; transition-delay: 0.1s; }
    
    .text-shadow { text-shadow: 0 4px 10px rgba(0,0,0,0.5); }
    .letter-spacing-1 { letter-spacing: 1px; }
    .hover-bg-white:hover { background-color: #fff !important; color: var(--bs-dark) !important; }
</style>

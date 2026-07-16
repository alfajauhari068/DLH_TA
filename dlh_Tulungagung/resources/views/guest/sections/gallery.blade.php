<section class="section-spacing bg-light border-top border-light">
    <div class="container">
        <div class="text-center heading-spacing">
            <h2 class="text-section text-dark mb-2">Galeri Kegiatan</h2>
            <p class="text-subtitle text-muted paragraph-spacing">Dokumentasi aktivitas dan program kerja Dinas Lingkungan Hidup</p>
        </div>
        
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 justify-content-center">
            @php
                $displayGalleries = collect([]);
                if (isset($galleries) && $galleries->count() > 0) {
                    $displayGalleries = $galleries->take(8);
                }
                // Pad with dummy items if less than 6 to ensure a good looking grid
                $needed = 6 - $displayGalleries->count();
                if ($needed > 0) {
                    for ($i = 1; $i <= $needed; $i++) {
                        $displayGalleries->push((object)[
                            'title' => 'Dokumentasi Kegiatan ' . $i,
                            'album_name' => 'Album Umum',
                            'image_url' => 'https://placehold.co/400x400/1e7e34/ffffff?text=Gallery+' . $i
                        ]);
                    }
                }
            @endphp

            @foreach($displayGalleries as $item)
                <div class="col">
                    <div class="position-relative overflow-hidden rounded-card shadow-elevate-1 card-lift group cursor-pointer img-zoom-container bg-white" style="aspect-ratio: 1/1;">
                        <img src="{{ $item->image_url ?? asset('images/default-gallery.jpg') }}" 
                             onerror="this.src='https://placehold.co/400x400/1e7e34/ffffff?text=Gallery'"
                             alt="{{ $item->title ?? 'Galeri' }}" 
                             class="w-100 h-100 object-fit-cover img-zoom">
                        
                        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-75 d-flex flex-column justify-content-end card-padding opacity-0 group-hover-opacity-100 transition-200">
                            <h3 class="text-white text-subtitle mb-1 leading-tight">{{ Str::limit($item->title ?? 'Tanpa Judul', 50) }}</h3>
                            @if(isset($item->album_name))
                                <p class="text-white-50 text-small mb-0">{{ $item->album_name }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-5 text-center">
            <a href="{{ url('/galeri') }}" class="btn btn-primary fw-bold btn-padding rounded-btn shadow-elevate-2 btn-lift">Lihat Semua Galeri</a>
        </div>
    </div>
</section>

<style>
    .group-hover-opacity-100 { opacity: 0; }
    .group:hover .group-hover-opacity-100 { opacity: 1 !important; }
</style>

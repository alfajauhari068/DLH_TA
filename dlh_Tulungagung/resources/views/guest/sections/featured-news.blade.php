<section class="section-spacing bg-white position-relative">
    <div class="container">
        
        <div class="row mb-5">
            <div class="col-md-8">
                <span class="badge bg-primary bg-opacity-10 text-primary mb-3 px-3 py-2 fw-bold rounded-pill text-uppercase letter-spacing-1">Jendela Informasi</span>
                <h2 class="display-5 fw-bolder mb-3 text-dark">Kabar & Publikasi</h2>
                <p class="text-muted fs-5 mb-0">Rangkuman peristiwa, inovasi, dan langkah nyata kami dalam pelestarian lingkungan.</p>
            </div>
            <div class="col-md-4 d-flex align-items-end justify-content-md-end mt-4 mt-md-0">
                <a href="{{ url('/berita') }}" class="btn btn-outline-dark fw-bold rounded-pill px-4 py-2 hover-lift transition-all">
                    Arsip Berita <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>
        </div>

        @if(isset($latestNews) && $latestNews->count() > 0)
            @php $featured = $latestNews->first(); @endphp
            
            <!-- Massive Featured Article -->
            <div class="row mb-5">
                <div class="col-12">
                    <a href="{{ url('/berita/' . ($featured->slug ?? '')) }}" class="card border-0 rounded-4 overflow-hidden position-relative shadow-lg group d-block text-decoration-none bg-dark" style="min-height: 450px;">
                        <!-- Full bleed background -->
                        <div class="position-absolute top-0 start-0 w-100 h-100">
                            <img src="{{ $featured->featured_image ? asset('storage/' . $featured->featured_image) : asset('images/default-news.jpg') }}" alt="{{ $featured->title }}" class="w-100 h-100 object-fit-cover group-hover-scale transition-all opacity-75">
                        </div>
                        
                        <!-- Rich Gradient Overlay -->
                        <div class="position-absolute top-0 start-0 w-100 h-100 transition-all group-hover-overlay" style="background: linear-gradient(to top, rgba(0,0,0,0.95) 0%, rgba(0,0,0,0.4) 50%, rgba(0,0,0,0) 100%);"></div>

                        <div class="card-body position-relative z-2 h-100 d-flex flex-column justify-content-end p-4 p-md-5">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                @if(isset($featured->categories) && $featured->categories->count() > 0)
                                    <span class="badge bg-primary px-3 py-2 rounded-pill fw-bold text-uppercase letter-spacing-1 shadow-sm">{{ $featured->categories->first()->name }}</span>
                                @endif
                                <span class="text-white-75 fw-medium small d-flex align-items-center gap-2"><i class="bi bi-calendar3"></i> {{ isset($featured->published_at) ? \Carbon\Carbon::parse($featured->published_at)->translatedFormat('d F Y') : '-' }}</span>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-8">
                                    <h3 class="display-6 fw-bolder text-white mb-3 text-shadow group-hover-text-primary transition-all">{{ $featured->title }}</h3>
                                    <p class="text-white-75 fs-5 mb-0 d-none d-md-block" style="line-height: 1.6; text-shadow: 0 2px 4px rgba(0,0,0,0.5);">
                                        {{ Str::limit($featured->summary ?? strip_tags($featured->content ?? ''), 180) }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Secondary News Grid (Masonry/Card Grid style) -->
            @if($latestNews->count() > 1)
                <div class="row g-4">
                    @foreach($latestNews->skip(1)->take(3) as $item)
                        <div class="col-md-4">
                            <a href="{{ url('/berita/' . ($item->slug ?? '')) }}" class="card border-0 rounded-4 shadow-sm h-100 text-decoration-none group hover-lift transition-all bg-white" style="box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);">
                                <div class="position-relative overflow-hidden rounded-top-4" style="aspect-ratio: 16/10;">
                                    <img src="{{ $item->featured_image ? asset('storage/' . $item->featured_image) : asset('images/default-news.jpg') }}" class="w-100 h-100 object-fit-cover group-hover-scale transition-all" alt="{{ $item->title }}">
                                </div>
                                <div class="card-body p-4 d-flex flex-column">
                                    <div class="mb-3">
                                        <small class="text-primary fw-bold text-uppercase letter-spacing-1"><i class="bi bi-clock me-1"></i> {{ isset($item->published_at) ? \Carbon\Carbon::parse($item->published_at)->diffForHumans() : '-' }}</small>
                                    </div>
                                    <h4 class="fs-5 fw-bold text-dark mb-3 group-hover-text-primary transition-all" style="line-height: 1.4;">{{ Str::limit($item->title, 65) }}</h4>
                                    <div class="mt-auto pt-3 border-top border-light d-flex align-items-center text-muted small fw-medium">
                                        <span>Baca Artikel</span>
                                        <i class="bi bi-arrow-right ms-auto group-hover-translate-x transition-all"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            @endif

        @else
            <!-- Empty State -->
            <div class="bg-light rounded-4 p-5 text-center text-muted d-flex flex-column justify-content-center align-items-center" style="min-height: 400px; border: 2px dashed rgba(0,0,0,0.1);">
                <i class="bi bi-journal-x text-secondary mb-3 opacity-50" style="font-size: 4rem;"></i>
                <h4 class="text-dark fw-bold mb-2">Belum Ada Publikasi</h4>
                <p class="fs-5 mb-0">Informasi terbaru akan segera diperbarui.</p>
            </div>
        @endif
        
    </div>
</section>

<style>
    .transition-all { transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1); }
    .group-hover-scale { transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1); }
    .group:hover .group-hover-scale { transform: scale(1.05); }
    .group:hover .group-hover-overlay { background: linear-gradient(to top, rgba(0,0,0,0.98) 0%, rgba(0,0,0,0.6) 50%, rgba(0,0,0,0) 100%) !important; }
    .text-shadow { text-shadow: 0 4px 10px rgba(0,0,0,0.4); }
    .letter-spacing-1 { letter-spacing: 1px; }
    .group-hover-text-primary:hover, .group:hover .group-hover-text-primary { color: #6ee7b7 !important; }
    .card.bg-white .group:hover .group-hover-text-primary { color: var(--bs-primary) !important; }
    .hover-lift:hover { transform: translateY(-5px); box-shadow: 0 15px 30px -5px rgba(0,0,0,0.1) !important; }
    .group:hover .group-hover-translate-x { transform: translateX(5px); color: var(--bs-primary); }
</style>

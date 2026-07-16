<section class="section-spacing bg-white">
    <div class="container">
        <div class="d-flex justify-content-between align-items-end heading-spacing gap-components">
            <div>
                <h2 class="text-section text-dark mb-2">Berita Terbaru</h2>
                <p class="text-subtitle text-muted mb-0">Informasi dan kegiatan terkini seputar Dinas Lingkungan Hidup</p>
            </div>
            <a href="{{ url('/berita') }}" class="d-none d-md-inline-flex align-items-center gap-2 text-primary fw-semibold text-decoration-none hover-text-primary transition-200">
                Lihat Semua <i class="bi bi-arrow-right"></i>
            </a>
        </div>

        <div class="row g-4 align-items-start">
            <!-- Left (58%) - Featured News -->
            <div class="col-lg-7">
                @if(isset($latestNews) && $latestNews->count() > 0)
                    @php $featured = $latestNews->first(); @endphp
                    <div class="card border-0 shadow-elevate-1 rounded-card overflow-hidden card-lift group bg-white text-decoration-none">
                        <a href="{{ url('/berita/' . ($featured->slug ?? '')) }}" class="d-block position-relative bg-light w-100 img-zoom-container" style="aspect-ratio: 16/9;">
                            @if(isset($featured->category->name))
                                <span class="position-absolute top-0 start-0 m-3 badge bg-primary bg-opacity-90 px-3 py-2 text-small rounded-btn">
                                    {{ $featured->category->name }}
                                </span>
                            @endif
                            <img src="{{ $featured->featured_image ? asset('storage/' . $featured->featured_image) : asset('images/default-news.jpg') }}" alt="{{ $featured->title }}" class="w-100 h-100 object-fit-cover img-zoom">
                        </a>
                        <div class="card-body card-padding d-flex flex-column bg-white">
                            <div class="d-flex align-items-center text-muted text-meta mb-3 gap-3">
                                <span class="d-flex align-items-center gap-2"><i class="bi bi-calendar3"></i> {{ isset($featured->published_at) ? \Carbon\Carbon::parse($featured->published_at)->translatedFormat('d F Y') : '-' }}</span>
                                @if(isset($featured->author->name))
                                    <span class="d-flex align-items-center gap-2"><i class="bi bi-person"></i> {{ $featured->author->name }}</span>
                                @endif
                            </div>
                            <h3 class="text-card-title text-dark mb-3 leading-tight group-hover-text-primary transition-200">
                                <a href="{{ url('/berita/' . ($featured->slug ?? '')) }}" class="text-decoration-none text-reset">{{ $featured->title }}</a>
                            </h3>
                            <p class="text-muted text-body paragraph-spacing flex-grow-1">
                                {{ Str::limit($featured->summary ?? strip_tags($featured->content ?? ''), 200) }}
                            </p>
                            <div class="mt-auto pt-2">
                                <a href="{{ url('/berita/' . ($featured->slug ?? '')) }}" class="btn btn-outline-primary rounded-btn btn-padding btn-lift fw-bold">Selengkapnya <i class="bi bi-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="bg-light rounded-card p-5 text-center text-muted d-flex flex-column justify-content-center align-items-center shadow-elevate-1" style="aspect-ratio: 16/9;">
                        <i class="bi bi-journal-text opacity-50" style="font-size: 48px; margin-bottom: 16px;"></i>
                        <p class="text-body">Belum ada berita terbaru.</p>
                    </div>
                @endif
            </div>

            <!-- Right (42%) - Secondary News & Widgets -->
            <div class="col-lg-5 d-flex flex-column gap-4">
                
                <!-- Featured Video -->
                <div class="rounded-card overflow-hidden shadow-elevate-1 position-relative bg-dark w-100 img-zoom-container cursor-pointer" style="aspect-ratio: 4/3; display: flex; flex-direction: column; min-height: 0;">
                    <img src="{{ asset('images/default-video.jpg') }}" class="w-100 h-100 object-fit-cover opacity-50 img-zoom" alt="Video" onerror="this.src='https://placehold.co/800x600/212529/ffffff?text=Video+DLH'">
                    <a href="#" class="position-absolute top-50 start-50 translate-middle text-white text-decoration-none btn-lift">
                        <i class="bi bi-play-circle-fill" style="font-size: 64px; filter: drop-shadow(0 4px 12px rgba(0,0,0,0.4));"></i>
                    </a>
                </div>

                <!-- Secondary News -->
                <div class="bg-white rounded-card card-padding shadow-elevate-1">
                    <h4 class="text-card-title border-bottom pb-3 heading-spacing">Berita Lainnya</h4>
                    <div class="d-flex flex-column gap-components">
                        @if(isset($latestNews) && $latestNews->count() > 1)
                            @foreach($latestNews->skip(1)->take(3) as $item)
                                <div class="d-flex gap-3 align-items-start group cursor-pointer text-decoration-none img-zoom-container">
                                    <div class="flex-shrink-0 rounded-img overflow-hidden" style="width: 100px; height: 100px;">
                                        <img src="{{ $item->featured_image ? asset('storage/' . $item->featured_image) : asset('images/default-news.jpg') }}" class="w-100 h-100 object-fit-cover img-zoom" alt="{{ $item->title }}">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center h-100 py-1">
                                        <h5 class="text-subtitle fw-bold mb-2 group-hover-text-primary transition-200" style="line-height: 1.4;">
                                            <a href="{{ url('/berita/' . ($item->slug ?? '')) }}" class="text-dark text-decoration-none text-reset">{{ Str::limit($item->title, 55) }}</a>
                                        </h5>
                                        <small class="text-muted text-meta mt-auto"><i class="bi bi-clock me-1"></i> {{ isset($item->published_at) ? \Carbon\Carbon::parse($item->published_at)->diffForHumans() : '-' }}</small>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <!-- Skeleton Loading State for Empty News -->
                            @for($i = 0; $i < 3; $i++)
                                <div class="d-flex gap-3 align-items-start placeholder-glow">
                                    <div class="flex-shrink-0 rounded-img bg-secondary opacity-25" style="width: 100px; height: 100px;"></div>
                                    <div class="d-flex flex-column justify-content-center h-100 py-1 w-100">
                                        <div class="placeholder bg-secondary opacity-25 col-10 mb-2 rounded" style="height: 18px;"></div>
                                        <div class="placeholder bg-secondary opacity-25 col-8 mb-3 rounded" style="height: 18px;"></div>
                                        <div class="placeholder bg-secondary opacity-25 col-4 mt-auto rounded" style="height: 13px;"></div>
                                    </div>
                                </div>
                            @endfor
                        @endif
                    </div>
                </div>

                <!-- Archive Widget -->
                <a href="{{ url('/berita') }}" class="btn btn-primary w-100 d-flex justify-content-between align-items-center btn-padding fw-bold rounded-btn shadow-elevate-2 btn-lift">
                    <span>Arsip Berita</span>
                    <i class="bi bi-arrow-right-circle fs-5"></i>
                </a>

            </div>
        </div>

        <div class="mt-5 text-center d-md-none">
            <a href="{{ url('/berita') }}" class="btn btn-outline-primary fw-bold w-100 rounded-btn btn-padding">
                Lihat Semua Berita
            </a>
        </div>
    </div>
</section>

<style>
    .group-hover-scale { transition: transform 0.5s ease; }
    .group:hover .group-hover-scale { transform: scale(1.05); }
    .hover-text-primary:hover, .group:hover .group-hover-text-primary { color: var(--bs-primary) !important; }
    .hover-scale:hover { transform: translate(-50%, -50%) scale(1.1) !important; }
    .hover-shadow:hover { box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1) !important; transform: translateY(-2px); }
</style>

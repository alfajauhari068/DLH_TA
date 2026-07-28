<nav id="main-navbar" class="navbar navbar-expand-lg fixed-top transition-all duration-300 min-h-[72px] border-b border-black/5 z-[1030]">
    <!-- Background blur separated to prevent CSS stacking context bug on offcanvas -->
    <div class="absolute inset-0 bg-white/90 backdrop-blur-md -z-10"></div>
    <div class="container px-4">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center gap-3 group focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 rounded-xl" aria-label="Beranda">
            @if(!empty($globalSettings['logo']))
                <img src="{{ asset('storage/' . $globalSettings['logo']) }}" alt="Logo" fetchpriority="high" decoding="async" class="h-[32px] md:h-[36px] w-auto drop-shadow-sm transition-opacity duration-300 group-hover:opacity-80">
            @else
                <img src="{{ asset('images/icon-dinas.png') }}" alt="Logo" fetchpriority="high" decoding="async" class="h-[32px] md:h-[36px] w-auto drop-shadow-sm transition-opacity duration-300 group-hover:opacity-80" onerror="this.src='https://placehold.co/36x36/146C43/ffffff?text=DLH'">
            @endif
            <div class="d-flex flex-column justify-content-center">
                <h5 class="text-xs font-black text-gray-800 mb-0 tracking-tight">{{ $globalSettings['site_name'] ?? 'DINAS LINGKUNGAN HIDUP' }}</h5>
                <small class="text-primary font-bold text-[10px]">Kabupaten Tulungagung</small>
            </div>
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler border-0 shadow-none bg-gray-50 rounded-full w-11 h-11 flex lg:hidden items-center justify-center focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu Desktop & Offcanvas -->
        <div class="offcanvas-lg offcanvas-end border-0 shadow-2xl" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header bg-gray-50 border-b border-gray-100">
                <h5 class="offcanvas-title font-black text-gray-900" id="offcanvasNavbarLabel">Menu Navigasi</h5>
                <button type="button" class="btn-close shadow-none w-11 h-11 flex items-center justify-center p-0 rounded-full hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2" data-bs-dismiss="offcanvas" aria-label="Close menu"></button>
            </div>
            <div class="offcanvas-body align-items-center">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-4 gap-4 md:gap-8">
                    @if(isset($globalHeaderMenu))
                        @foreach($globalHeaderMenu as $menuItem)
                            @if($menuItem->children->count() > 0)
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-sm font-medium px-4 py-2 rounded-full transition-all duration-300 hover:bg-light-green hover:text-primary hover:-translate-y-0.5 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ $menuItem->title }}
                                    </a>
                                    <ul class="dropdown-menu border-0 shadow-elevation-2 rounded-2xl p-2 mt-3 animate-fade-up">
                                        @foreach($menuItem->children as $child)
                                            <li><a class="dropdown-item rounded-xl py-2.5 px-4 text-sm font-medium text-gray-700 transition-all hover:bg-light-green hover:text-primary focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2" href="{{ Str::startsWith($child->url, ['http://', 'https://']) ? $child->url : url($child->url) }}" target="{{ $child->target }}">{{ $child->title }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link text-sm font-medium tracking-normal px-4 py-2 rounded-full transition-colors duration-300 {{ request()->is(ltrim($menuItem->url, '/')) ? 'bg-light-green text-primary' : 'hover:bg-light-green hover:text-primary text-gray-700' }} focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2" href="{{ Str::startsWith($menuItem->url, ['http://', 'https://']) ? $menuItem->url : url($menuItem->url) }}" target="{{ $menuItem->target }}">{{ $menuItem->title }}</a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                </ul>
                
                <form class="d-flex mt-4 mt-lg-0 position-relative group" role="search" action="{{ url('/search') }}" method="GET">
                    <div class="input-group">
                        <input class="form-control rounded-full bg-gray-50 border border-gray-100 py-2.5 ps-5 pe-12 shadow-none transition-colors focus:bg-white focus:border-primary/30 focus:outline-none focus:ring-2 focus:ring-primary/20" style="width: 220px;" type="search" name="q" placeholder="Cari informasi..." aria-label="Search form">
                        <button class="btn border-0 position-absolute end-0 top-50 translate-middle-y z-3 text-gray-400 group-hover:text-primary transition-colors focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 rounded-full w-10 h-10 flex items-center justify-center" type="submit" aria-label="Submit search">
                            <i class="bi bi-search text-lg" aria-hidden="true"></i>
                        </button>
                    </div>
                </form>
                
                <div class="ms-lg-4 mt-4 mt-lg-0 d-flex gap-3 align-items-center mb-6 lg:mb-0">
                    <a href="https://www.lapor.go.id/" target="_blank" class="flex items-center justify-center w-11 h-11 bg-gray-50 rounded-full text-danger hover:bg-danger/10 transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-danger focus:ring-offset-2" aria-label="Layanan Pengaduan LAPOR!" title="LAPOR!">
                        <i class="bi bi-megaphone-fill text-lg" aria-hidden="true"></i>
                    </a>
                    
                    <a href="{{ route('login') }}" class="flex items-center justify-center w-11 h-11 bg-gray-50 rounded-full text-gray-500 hover:bg-primary/10 hover:text-primary transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2" aria-label="Login Administrator" title="Login Admin">
                        <i class="bi bi-person-fill text-lg" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Spacer -->
<div style="height: 72px;"></div>

<style>
.navbar.scrolled {
    box-shadow: var(--shadow-sm) !important;
}
.navbar.scrolled > div.absolute {
    background: rgba(255, 255, 255, 0.95) !important;
    backdrop-filter: blur(16px);
}
</style>

@push('scripts')
<script>
    let ticking = false;
    window.addEventListener('scroll', function() {
        if (!ticking) {
            window.requestAnimationFrame(function() {
                const navbar = document.getElementById('main-navbar');
                if (window.scrollY > 20) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
                ticking = false;
            });
            ticking = true;
        }
    }, { passive: true });
</script>
@endpush

<nav id="main-navbar" class="navbar navbar-expand-lg fixed-top transition-all duration-300 min-h-[72px] z-[1030] border-b border-transparent">
    <!-- Background blur separated to prevent CSS stacking context bug on offcanvas -->
    <div class="absolute inset-0 bg-white/70 backdrop-blur-md -z-10 opacity-0 transition-opacity duration-300" id="navbar-bg"></div>
    <div class="container-fluid px-4 lg:px-8">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center gap-2 md:gap-3 group focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 rounded-xl" aria-label="Beranda">
            @if(!empty($globalSettings['logo']))
                <img src="{{ asset('storage/' . $globalSettings['logo']) }}" alt="Logo" fetchpriority="high" decoding="async" class="h-[36px] md:h-[40px] w-auto drop-shadow-sm transition-opacity duration-300 group-hover:opacity-80 shrink-0">
            @else
                <img src="{{ asset('images/icon-dinas.png') }}" alt="Logo" fetchpriority="high" decoding="async" class="h-[36px] md:h-[40px] w-auto drop-shadow-sm transition-opacity duration-300 group-hover:opacity-80 shrink-0" onerror="this.src='https://placehold.co/36x36/146C43/ffffff?text=DLH'">
            @endif
            <div class="d-flex flex-column justify-content-center">
                <h5 class="text-[11px] md:text-sm font-black text-gray-800 mb-0 tracking-tight leading-tight uppercase">{{ $globalSettings['site_name'] ?? 'DINAS LINGKUNGAN HIDUP' }}</h5>
                <small class="text-primary font-bold text-[9px] md:text-xs leading-none">Kabupaten Tulungagung</small>
            </div>
        </a>



        <!-- Menu Desktop & Offcanvas -->
        <div class="offcanvas-lg offcanvas-end border-0 shadow-2xl" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header bg-gray-50 border-b border-gray-100 position-relative">
                <h5 class="offcanvas-title font-black text-gray-900" id="offcanvasNavbarLabel">Menu Navigasi</h5>
                <!-- Close Button positioned absolutely at the top right of offcanvas header -->
                <button type="button" class="absolute top-3.5 right-4 btn border-0 shadow-none w-10 h-10 flex items-center justify-center p-0 rounded-full bg-gray-100 hover:bg-gray-200 text-gray-500 hover:text-gray-800 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 z-50" data-bs-dismiss="offcanvas" aria-label="Close menu">
                    <i class="bi bi-x-lg text-sm"></i>
                </button>
            </div>
            <div class="offcanvas-body align-items-center">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 pe-xl-4 gap-2 lg:gap-3 xl:gap-6">
                    @if(isset($globalHeaderMenu))
                        @foreach($globalHeaderMenu as $menuItem)
                            @if($menuItem->children->count() > 0)
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-sm font-medium px-3 py-2 rounded-full transition-all duration-300 hover:bg-surface-green hover:text-primary-green hover:-translate-y-0.5 focus:outline-none focus:ring-2 focus:ring-primary-green focus:ring-offset-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ $menuItem->title }}
                                    </a>
                                    <ul class="dropdown-menu border-0 soft-shadow rounded-2xl p-2 mt-3 animate-fade-up glass-panel">
                                        @foreach($menuItem->children as $child)
                                            <li><a class="dropdown-item rounded-xl py-2.5 px-4 text-sm font-medium text-gray-700 transition-all hover:bg-surface-green hover:text-primary-green focus:outline-none focus:ring-2 focus:ring-primary-green focus:ring-offset-2" href="{{ Str::startsWith($child->url, ['http://', 'https://']) ? $child->url : url($child->url) }}" target="{{ $child->target }}">{{ $child->title }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link text-sm font-medium tracking-normal px-3 py-2 rounded-full transition-colors duration-300 {{ request()->is(ltrim($menuItem->url, '/')) ? 'bg-surface-green text-primary-green font-semibold' : 'hover:bg-surface-green hover:text-primary-green text-gray-700' }} focus:outline-none focus:ring-2 focus:ring-primary-green focus:ring-offset-2" href="{{ Str::startsWith($menuItem->url, ['http://', 'https://']) ? $menuItem->url : url($menuItem->url) }}" target="{{ $menuItem->target }}">{{ $menuItem->title }}</a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                </ul>
                
                <form class="d-flex mt-4 mt-lg-0 position-relative group" role="search" action="{{ url('/search') }}" method="GET">
                    <div class="input-group">
                        <input class="form-control rounded-full bg-white/80 border border-gray-100 py-2.5 ps-5 pe-12 shadow-none transition-all duration-300 focus:bg-white focus:border-primary-green/30 focus:outline-none focus:ring-2 focus:ring-primary-green/20 glass-panel hover-lift" style="width: 220px;" type="search" name="q" placeholder="Cari informasi..." aria-label="Search form">
                        <button class="btn border-0 position-absolute end-0 top-50 translate-middle-y z-3 text-gray-400 group-hover:text-primary-green transition-colors focus:outline-none focus:ring-2 focus:ring-primary-green focus:ring-offset-2 rounded-full w-10 h-10 flex items-center justify-center" type="submit" aria-label="Submit search">
                            <i class="bi bi-search text-lg" aria-hidden="true"></i>
                        </button>
                    </div>
                </form>
                
                <div class="ms-lg-4 mt-4 mt-lg-0 d-flex gap-3 align-items-center mb-6 lg:mb-0">
                    <a href="https://www.lapor.go.id/" target="_blank" class="flex items-center justify-center w-11 h-11 bg-white border border-gray-100 rounded-full text-danger hover:bg-danger/10 hover-lift transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-danger focus:ring-offset-2" aria-label="Layanan Pengaduan LAPOR!" title="LAPOR!">
                        <i class="bi bi-megaphone-fill text-lg" aria-hidden="true"></i>
                    </a>
                    
                    <a href="{{ route('login') }}" class="flex items-center justify-center w-11 h-11 bg-white border border-gray-100 rounded-full text-gray-500 hover:bg-primary-green/10 hover:text-primary-green hover-lift transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-primary-green focus:ring-offset-2" aria-label="Login Administrator" title="Login Admin">
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
    border-color: var(--glass-border) !important;
}
</style>

@push('scripts')
<script>
    let ticking = false;
    window.addEventListener('scroll', function() {
        if (!ticking) {
            window.requestAnimationFrame(function() {
                const navbar = document.getElementById('main-navbar');
                const navbarBg = document.getElementById('navbar-bg');
                if (window.scrollY > 20) {
                    navbar.classList.add('scrolled', 'soft-shadow');
                    navbarBg.classList.remove('opacity-0');
                    navbarBg.classList.add('opacity-100', 'glass-panel');
                } else {
                    navbar.classList.remove('scrolled', 'soft-shadow');
                    navbarBg.classList.add('opacity-0');
                    navbarBg.classList.remove('opacity-100', 'glass-panel');
                }
                ticking = false;
            });
            ticking = true;
        }
    }, { passive: true });

    // Robust manual event listener to close responsive Bootstrap offcanvas on mobile devices
    document.addEventListener('DOMContentLoaded', function() {
        const offcanvasEl = document.getElementById('offcanvasNavbar');
        const closeBtn = document.querySelector('[data-bs-dismiss="offcanvas"]');
        if (offcanvasEl && closeBtn) {
            closeBtn.addEventListener('click', function() {
                // If bootstrap is bound globally in the window context
                if (window.bootstrap && window.bootstrap.Offcanvas) {
                    const instance = window.bootstrap.Offcanvas.getInstance(offcanvasEl) || new window.bootstrap.Offcanvas(offcanvasEl);
                    instance.hide();
                } else {
                    // Fail-safe manual fallback using DOM manipulation
                    offcanvasEl.classList.remove('show');
                    const backdrop = document.querySelector('.offcanvas-backdrop');
                    if (backdrop) {
                        backdrop.remove();
                    }
                    document.body.classList.remove('modal-open');
                    document.body.style.overflow = '';
                    document.body.style.paddingRight = '';
                }
            });
        }
    });
</script>
@endpush

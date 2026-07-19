<nav id="main-navbar" class="navbar navbar-expand-lg fixed-top transition-all py-3 bg-white shadow-sm" style="transition: all 0.3s ease;">
    <div class="container">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center gap-3">
            @if(!empty($globalSettings['logo']))
                <img src="{{ asset('storage/' . $globalSettings['logo']) }}" alt="Logo" height="45" class="drop-shadow-sm">
            @else
                <img src="{{ asset('images/icon-dinas.png') }}" alt="Logo" style="height: 45px; width: auto; max-width: 100%; object-fit: contain;" class="drop-shadow-sm" onerror="this.src='https://placehold.co/48x48/1e7e34/ffffff?text=DLH'">
            @endif
            <div class="d-flex flex-column justify-content-center">
                <h1 class="h6 mb-0 fw-bolder text-dark" style="letter-spacing: 0.5px;">{{ $globalSettings['site_name'] ?? 'DLH' }}</h1>
                <small class="text-success fw-bold" style="font-size: 0.7rem; letter-spacing: 1px; text-transform: uppercase;">Kabupaten Tulungagung</small>
            </div>
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler border-0 shadow-none bg-light rounded-circle p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu Desktop & Offcanvas -->
        <div class="offcanvas offcanvas-end border-0 shadow" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header bg-light border-bottom">
                <h5 class="offcanvas-title fw-bold" id="offcanvasNavbarLabel">Menu Navigasi</h5>
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body align-items-center">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 gap-1">
                    @if(isset($globalHeaderMenu))
                        @foreach($globalHeaderMenu as $menuItem)
                            @if($menuItem->children->count() > 0)
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle fw-medium px-3 rounded-pill hover-bg-light transition-all" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ $menuItem->title }}
                                    </a>
                                    <ul class="dropdown-menu border-0 shadow-lg rounded-4 p-2 mt-2">
                                        @foreach($menuItem->children as $child)
                                            <li><a class="dropdown-item rounded-3 py-2 px-3 fw-medium transition-all hover-text-primary" href="{{ Str::startsWith($child->url, ['http://', 'https://']) ? $child->url : url($child->url) }}" target="{{ $child->target }}">{{ $child->title }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link fw-medium px-3 rounded-pill transition-all {{ request()->is(ltrim($menuItem->url, '/')) ? 'active bg-primary bg-opacity-10 text-primary' : 'hover-bg-light text-dark' }}" href="{{ Str::startsWith($menuItem->url, ['http://', 'https://']) ? $menuItem->url : url($menuItem->url) }}" target="{{ $menuItem->target }}">{{ $menuItem->title }}</a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                </ul>
                <form class="d-flex mt-3 mt-lg-0 position-relative" role="search" action="{{ url('/search') }}" method="GET">
                    <div class="input-group">
                        <input class="form-control rounded-pill bg-light border-0 ps-4 pe-5 shadow-none" type="search" name="q" placeholder="Cari informasi..." aria-label="Search">
                        <button class="btn border-0 position-absolute end-0 top-50 translate-middle-y z-3 text-muted hover-text-primary" type="submit"><i class="bi bi-search"></i></button>
                    </div>
                </form>
                <div class="ms-lg-3 mt-3 mt-lg-0 d-flex gap-2">
                    <a href="https://www.lapor.go.id/" target="_blank" class="btn btn-danger fw-bold rounded-pill px-4 shadow-sm hover-lift transition-all"><i class="bi bi-megaphone-fill me-1"></i> LAPOR!</a>
                    <a href="{{ route('login') }}" class="btn btn-light rounded-circle shadow-sm hover-lift text-primary border transition-all" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;" title="Login Admin"><i class="bi bi-box-arrow-in-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Spacer -->
<div style="height: 80px;"></div>

<style>
.hover-bg-light:hover { background-color: #f8f9fa; }
.hover-text-primary:hover { color: var(--bs-primary) !important; background-color: rgba(var(--bs-primary-rgb), 0.05); }
.hover-lift:hover { transform: translateY(-2px); box-shadow: 0 6px 12px -4px rgba(0,0,0,0.15) !important; }
.navbar.scrolled {
    background-color: rgba(255, 255, 255, 0.95) !important;
    backdrop-filter: blur(10px);
    box-shadow: 0 4px 20px -5px rgba(0,0,0,0.1) !important;
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
}
</style>

@push('scripts')
<script>
    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('main-navbar');
        if (window.scrollY > 20) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
</script>
@endpush

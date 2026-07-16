<nav id="main-navbar" class="navbar navbar-expand-lg fixed-top transition-all duration-300 py-3 bg-white shadow-sm">
    <div class="container">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center gap-2">
            @if(!empty($globalSettings['logo']))
                <img src="{{ asset('storage/' . $globalSettings['logo']) }}" alt="Logo" height="40">
            @else
                <img src="{{ asset('build/assets/icon-dinas.png') }}" alt="Logo" style="height: 40px; width: auto; max-width: 100%; object-fit: contain;">
            @endif
            <div class="d-flex flex-column">
                <h1 class="h6 mb-0 fw-bold text-primary">{{ $globalSettings['site_name'] ?? 'DLH' }}</h1>
                <small class="text-muted" style="font-size: 0.75rem;">Kabupaten Tulungagung</small>
            </div>
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu Desktop & Offcanvas -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu Navigasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    @if(isset($globalHeaderMenu))
                        @foreach($globalHeaderMenu as $menuItem)
                            @if($menuItem->children->count() > 0)
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ $menuItem->title }}
                                    </a>
                                    <ul class="dropdown-menu">
                                        @foreach($menuItem->children as $child)
                                            <li><a class="dropdown-item" href="{{ url($child->url) }}" target="{{ $child->target }}">{{ $child->title }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is(ltrim($menuItem->url, '/')) ? 'active fw-bold text-primary' : '' }}" href="{{ url($menuItem->url) }}" target="{{ $menuItem->target }}">{{ $menuItem->title }}</a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                </ul>
                <form class="d-flex mt-3 mt-lg-0" role="search" action="{{ url('/search') }}" method="GET">
                    <div class="input-group">
                        <input class="form-control border-end-0" type="search" name="q" placeholder="Cari informasi..." aria-label="Search">
                        <button class="btn btn-outline-secondary border-start-0" type="submit"><i class="bi bi-search"></i></button>
                    </div>
                </form>
                <div class="ms-lg-3 mt-3 mt-lg-0 d-flex gap-2">
                    <a href="https://www.lapor.go.id/" target="_blank" class="btn btn-danger fw-bold"><i class="bi bi-megaphone-fill me-1"></i> LAPOR!</a>
                    <a href="{{ route('login') }}" class="btn btn-outline-secondary" title="Login Admin"><i class="bi bi-box-arrow-in-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Spacer -->
<div style="height: 76px;"></div>

@push('scripts')
<script>
    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('main-navbar');
        if (window.scrollY > 20) {
            navbar.classList.add('shadow');
            navbar.classList.remove('shadow-sm', 'py-3');
            navbar.classList.add('py-2');
        } else {
            navbar.classList.add('shadow-sm', 'py-3');
            navbar.classList.remove('shadow', 'py-2');
        }
    });
</script>
@endpush

@php
    /*
    |--------------------------------------------------------------------------
    | Mobile Navigation
    |--------------------------------------------------------------------------
    | Sumber menu utama berasal dari $globalHeaderMenu yang sama dengan
    | navigasi yang dikelola melalui CMS Admin.
    |
    | Tidak ada menu publik yang di-hard-code di sini.
    |--------------------------------------------------------------------------
    */

    $navigationMenus = collect($globalHeaderMenu ?? []);

    /*
    |--------------------------------------------------------------------------
    | Helper URL
    |--------------------------------------------------------------------------
    */

    $resolveMenuUrl = function ($menu) {
        $url = trim((string) ($menu->url ?? ''));

        if ($url === '') {
            return '#';
        }

        if (\Illuminate\Support\Str::startsWith($url, ['http://', 'https://'])) {
            return $url;
        }

        return url($url);
    };

    /*
    |--------------------------------------------------------------------------
    | Cari menu berdasarkan nama
    |--------------------------------------------------------------------------
    */

    $findMenu = function ($names) use ($navigationMenus) {
        $names = collect($names)->map(
            fn ($name) => \Illuminate\Support\Str::lower(trim($name))
        );

        return $navigationMenus->first(function ($menu) use ($names) {
            $title = \Illuminate\Support\Str::lower(
                trim((string) ($menu->title ?? ''))
            );

            return $names->contains($title);
        });
    };

    /*
    |--------------------------------------------------------------------------
    | Menu utama mobile
    |--------------------------------------------------------------------------
    */

    $homeMenu = $findMenu(['Beranda', 'Home']);
    $programMenu = $findMenu(['Program']);
    $profileMenu = $findMenu(['Profil', 'Profile']);
    $servicesMenu = $findMenu(['Layanan']);

    /*
    |--------------------------------------------------------------------------
    | Menu "Lainnya"
    |
    | Semua menu top-level CMS selain menu utama di atas.
    |--------------------------------------------------------------------------
    */

    $mainMenuIds = collect([
        optional($homeMenu)->id,
        optional($programMenu)->id,
        optional($profileMenu)->id,
        optional($servicesMenu)->id,
    ])->filter();

    $moreMenus = $navigationMenus->filter(function ($menu) use ($mainMenuIds) {
        return !$mainMenuIds->contains($menu->id);
    });
@endphp


{{-- ============================================================
     MOBILE BOTTOM NAVIGATION
     ============================================================ --}}

<nav
    id="mobile-bottom-nav"
    class="mobile-bottom-nav d-md-none"
    aria-label="Navigasi utama mobile"
>
    {{-- HOME --}}
    @if($homeMenu)
        <a
            href="{{ $resolveMenuUrl($homeMenu) }}"
            class="mobile-nav-item {{ request()->is('/') ? 'active' : '' }}"
            @if(request()->is('/')) aria-current="page" @endif
        >
            <i class="bi bi-house-door{{ request()->is('/') ? '-fill' : '' }}"></i>
            <span>Home</span>
        </a>
    @else
        <a
            href="{{ url('/') }}"
            class="mobile-nav-item {{ request()->is('/') ? 'active' : '' }}"
        >
            <i class="bi bi-house-door{{ request()->is('/') ? '-fill' : '' }}"></i>
            <span>Home</span>
        </a>
    @endif


    {{-- PROGRAM --}}
    @if($programMenu)
        @if($programMenu->children && $programMenu->children->count() > 0)

            <button
                type="button"
                class="mobile-nav-item border-0 bg-transparent"
                onclick="toggleBottomSheet('program-sheet')"
            >
                <i class="bi bi-grid"></i>
                <span>Program</span>
            </button>

        @else

            <a
                href="{{ $resolveMenuUrl($programMenu) }}"
                class="mobile-nav-item {{ request()->is(trim($programMenu->url ?? '', '/')) ? 'active' : '' }}"
            >
                <i class="bi bi-grid{{ request()->is(trim($programMenu->url ?? '', '/')) ? '-fill' : '' }}"></i>
                <span>Program</span>
            </a>

        @endif
    @else
        {{-- Jika Program tidak tersedia di CMS, jangan membuat route baru --}}
        <span class="mobile-nav-item disabled">
            <i class="bi bi-grid"></i>
            <span>Program</span>
        </span>
    @endif


    {{-- PROFIL --}}
    @if($profileMenu)
        @if($profileMenu->children && $profileMenu->children->count() > 0)

            <button
                type="button"
                class="mobile-nav-item border-0 bg-transparent"
                onclick="toggleBottomSheet('profile-sheet')"
            >
                <i class="bi bi-building"></i>
                <span>Profil</span>
            </button>

        @else

            <a
                href="{{ $resolveMenuUrl($profileMenu) }}"
                class="mobile-nav-item"
            >
                <i class="bi bi-building"></i>
                <span>Profil</span>
            </a>

        @endif
    @else
        <span class="mobile-nav-item disabled">
            <i class="bi bi-building"></i>
            <span>Profil</span>
        </span>
    @endif


    {{-- LAYANAN --}}
    <button
        type="button"
        class="mobile-nav-item border-0 bg-transparent {{ (request()->is('ppid') || request()->is('kontak') || request()->is('layanan') || request()->is('layanan/*')) ? 'active' : '' }}"
        onclick="toggleBottomSheet('services-sheet')"
    >
        <i class="bi bi-patch-check{{ (request()->is('ppid') || request()->is('kontak') || request()->is('layanan') || request()->is('layanan/*')) ? '-fill' : '' }}"></i>
        <span>Layanan</span>
    </button>


    {{-- LAINNYA --}}
    <button
        type="button"
        class="mobile-nav-item border-0 bg-transparent"
        onclick="toggleBottomSheet('more-sheet')"
    >
        <i class="bi bi-three-dots"></i>
        <span>Lainnya</span>
    </button>
</nav>


{{-- ============================================================
     BOTTOM SHEET: PROGRAM
     ============================================================ --}}

@if($programMenu && $programMenu->children && $programMenu->children->count() > 0)

<div
    id="program-sheet"
    class="bottom-sheet-overlay"
    aria-hidden="true"
>
    <div
        class="bottom-sheet-content"
        role="dialog"
        aria-modal="true"
        aria-labelledby="program-sheet-title"
    >

        <div
            class="bottom-sheet-handle"
            onclick="toggleBottomSheet('program-sheet')"
        ></div>

        <div class="bottom-sheet-header">
            <h6 id="program-sheet-title">
                {{ $programMenu->title }}
            </h6>

            <button
                type="button"
                onclick="toggleBottomSheet('program-sheet')"
                aria-label="Tutup menu program"
            >
                <i class="bi bi-x-lg"></i>
            </button>
        </div>

        <div class="bottom-sheet-list">

            @foreach($programMenu->children as $child)

                <a
                    href="{{ $resolveMenuUrl($child) }}"
                    target="{{ $child->target ?? '_self' }}"
                    class="bottom-sheet-link"
                >
                    <span>{{ $child->title }}</span>
                    <i class="bi bi-chevron-right"></i>
                </a>

            @endforeach

        </div>

    </div>
</div>

@endif


{{-- ============================================================
     BOTTOM SHEET: PROFIL
     ============================================================ --}}

@if($profileMenu && $profileMenu->children && $profileMenu->children->count() > 0)

<div
    id="profile-sheet"
    class="bottom-sheet-overlay"
    aria-hidden="true"
>
    <div
        class="bottom-sheet-content"
        role="dialog"
        aria-modal="true"
        aria-labelledby="profile-sheet-title"
    >

        <div
            class="bottom-sheet-handle"
            onclick="toggleBottomSheet('profile-sheet')"
        ></div>

        <div class="bottom-sheet-header">

            <h6 id="profile-sheet-title">
                {{ $profileMenu->title }}
            </h6>

            <button
                type="button"
                onclick="toggleBottomSheet('profile-sheet')"
                aria-label="Tutup menu profil"
            >
                <i class="bi bi-x-lg"></i>
            </button>

        </div>

        <div class="bottom-sheet-list">

            @foreach($profileMenu->children as $child)

                <a
                    href="{{ $resolveMenuUrl($child) }}"
                    target="{{ $child->target ?? '_self' }}"
                    class="bottom-sheet-link"
                >
                    <span>{{ $child->title }}</span>
                    <i class="bi bi-chevron-right"></i>
                </a>

            @endforeach

        </div>

    </div>
</div>

@endif


{{-- ============================================================
     BOTTOM SHEET: LAYANAN
     ============================================================ --}}

<div
    id="services-sheet"
    class="bottom-sheet-overlay fixed inset-0 bg-black/50 z-[1050] opacity-0 pointer-events-none flex items-end justify-center"
    aria-hidden="true"
>
    <div
        class="bottom-sheet-content bg-white w-full max-w-md rounded-t-3xl p-4 shadow-2xl overflow-y-auto max-h-[85vh]"
        role="dialog"
        aria-modal="true"
        aria-labelledby="services-sheet-title"
    >

        <div
            class="bottom-sheet-handle"
            onclick="toggleBottomSheet('services-sheet')"
        ></div>

        <div class="bottom-sheet-header">
            <h6 id="services-sheet-title">
                Layanan
            </h6>

            <button
                type="button"
                onclick="toggleBottomSheet('services-sheet')"
                aria-label="Tutup menu layanan"
            >
                <i class="bi bi-x-lg"></i>
            </button>
        </div>

        <div class="bottom-sheet-list">
            <a href="{{ route('ppid') }}" class="bottom-sheet-link {{ request()->is('ppid') ? 'active' : '' }}">
                <span>PPID</span>
                <i class="bi bi-chevron-right"></i>
            </a>
            <a href="{{ route('contact') }}" class="bottom-sheet-link {{ request()->is('kontak') ? 'active' : '' }}">
                <span>Kontak</span>
                <i class="bi bi-chevron-right"></i>
            </a>
            <a href="{{ route('services') }}" class="bottom-sheet-link {{ request()->is('layanan') || request()->is('layanan/*') ? 'active' : '' }}">
                <span>Alur Pelayanan</span>
                <i class="bi bi-chevron-right"></i>
            </a>
        </div>

    </div>
</div>


{{-- ============================================================
     BOTTOM SHEET: LAINNYA
     ============================================================ --}}

<div
    id="more-sheet"
    class="bottom-sheet-overlay fixed inset-0 bg-black/50 z-[1050] opacity-0 pointer-events-none flex items-end justify-center"
>
    <div
        class="bottom-sheet-content bg-white w-full max-w-md rounded-t-3xl p-4 shadow-2xl overflow-y-auto max-h-[85vh]"
    >

        {{-- Handle --}}
        <div
            class="w-12 h-1 bg-gray-300 rounded-full mx-auto mb-4"
            onclick="toggleBottomSheet('more-sheet')"
        ></div>


        {{-- Header --}}
        <div class="d-flex justify-content-between align-items-center mb-3">

            <h6 class="font-black text-gray-900 mb-0">
                Menu Lainnya
            </h6>

            <button
                type="button"
                onclick="toggleBottomSheet('more-sheet')"
                class="btn border-0 bg-gray-100 rounded-full w-8 h-8 d-flex align-items-center justify-content-center"
                aria-label="Tutup menu lainnya"
            >
                <i class="bi bi-x-lg text-xs"></i>
            </button>

        </div>


        {{-- ====================================================
             MENU DARI CMS
             ==================================================== --}}

        <div class="list-group list-group-flush pb-4">

            @php

                /*
                |--------------------------------------------------------------------------
                | Menu yang tetap berada di Bottom Navigation utama
                |--------------------------------------------------------------------------
                */

                $excludeTitles = [
                    'home',
                    'beranda',
                    'program',
                    'profil',
                    'profile',
                    'layanan',
                ];


                /*
                |--------------------------------------------------------------------------
                | Ambil menu top-level CMS yang bukan menu utama
                |--------------------------------------------------------------------------
                */

                $otherMenus = collect($globalHeaderMenu ?? [])
                    ->filter(function ($item) use ($excludeTitles) {

                        $title = \Illuminate\Support\Str::lower(
                            trim((string) $item->title)
                        );

                        return !in_array($title, $excludeTitles, true);

                    })
                    ->values();

            @endphp


            @forelse($otherMenus as $menuItem)

                @php

                    $hasChildren =
                        isset($menuItem->children)
                        && $menuItem->children
                        && $menuItem->children->count() > 0;

                    $submenuId = 'mobile-submenu-' . $menuItem->id;

                    $menuUrl = trim((string) ($menuItem->url ?? ''));

                    $isExternal =
                        \Illuminate\Support\Str::startsWith(
                            $menuUrl,
                            ['http://', 'https://']
                        );

                    $resolvedUrl = $menuUrl === ''
                        ? '#'
                        : ($isExternal
                            ? $menuUrl
                            : url($menuUrl));

                @endphp


                {{-- =================================================
                     MENU YANG MEMILIKI SUBMENU
                     ================================================= --}}

                @if($hasChildren)

                    <div class="mobile-more-group">

                        {{-- Parent menu --}}
                        <button
                            type="button"
                            class="mobile-more-parent w-100 border-0 bg-transparent text-start px-2 py-3 d-flex align-items-center justify-content-between"
                            onclick="toggleMobileSubmenu('{{ $submenuId }}', this)"
                            aria-expanded="false"
                            aria-controls="{{ $submenuId }}"
                        >

                            <span class="fw-bold text-gray-800">
                                {{ $menuItem->title }}
                            </span>

                            <i class="bi bi-chevron-down mobile-more-chevron"></i>

                        </button>


                        {{-- Submenu --}}
                        <div
                            id="{{ $submenuId }}"
                            class="mobile-more-submenu"
                            hidden
                        >

                            @foreach($menuItem->children as $child)

                                @php

                                    $childUrl = trim(
                                        (string) ($child->url ?? '')
                                    );

                                    $childExternal =
                                        \Illuminate\Support\Str::startsWith(
                                            $childUrl,
                                            ['http://', 'https://']
                                        );

                                    $resolvedChildUrl = $childUrl === ''
                                        ? '#'
                                        : ($childExternal
                                            ? $childUrl
                                            : url($childUrl));

                                @endphp


                                <a
                                    href="{{ $resolvedChildUrl }}"
                                    target="{{ $child->target ?? '_self' }}"
                                    class="mobile-more-child d-flex align-items-center justify-content-between text-decoration-none"
                                >

                                    <span>
                                        {{ $child->title }}
                                    </span>

                                    <i class="bi bi-chevron-right"></i>

                                </a>

                            @endforeach

                        </div>

                    </div>

                @else

                    {{-- =================================================
                         MENU TANPA SUBMENU
                         ================================================= --}}

                    <a
                        href="{{ $resolvedUrl }}"
                        target="{{ $menuItem->target ?? '_self' }}"
                        class="mobile-more-single d-flex align-items-center justify-content-between text-decoration-none"
                    >

                        <span>
                            {{ $menuItem->title }}
                        </span>

                        <i class="bi bi-chevron-right"></i>

                    </a>

                @endif

            @empty

                <div class="text-center py-4 text-muted">
                    Menu belum tersedia.
                </div>

            @endforelse

        </div>

    </div>
</div>


{{-- ============================================================
     STYLE KHUSUS SUBMENU MOBILE
     ============================================================ --}}

<style>

    .mobile-more-group {
        border-bottom: 1px solid rgba(0, 0, 0, 0.06);
    }

    .mobile-more-parent {
        min-height: 52px;
        color: #1f2937;
        cursor: pointer;
    }

    .mobile-more-parent:focus {
        outline: none;
        box-shadow: none;
    }

    .mobile-more-chevron {
        font-size: 12px;
        transition: transform 0.25s ease;
    }

    .mobile-more-parent[aria-expanded="true"]
    .mobile-more-chevron {
        transform: rotate(180deg);
    }

    .mobile-more-submenu {
        margin: 0 8px 10px 8px;
        padding: 4px 0;
        background: #f7faf8;
        border-radius: 12px;
        overflow: hidden;
    }

    .mobile-more-child {
        min-height: 46px;
        padding: 11px 14px;
        color: #4b5563;
        font-size: 14px;
        font-weight: 600;
        border-bottom: 1px solid rgba(0, 0, 0, 0.04);
    }

    .mobile-more-child:last-child {
        border-bottom: none;
    }

    .mobile-more-child:hover {
        color: #0b5e43;
        background: #eef7f2;
    }

    .mobile-more-child i {
        font-size: 11px;
        opacity: 0.6;
    }

    .mobile-more-single {
        min-height: 52px;
        padding: 12px 8px;
        color: #374151;
        font-size: 14px;
        font-weight: 700;
        border-bottom: 1px solid rgba(0, 0, 0, 0.06);
    }

    .mobile-more-single:hover {
        color: #0b5e43;
    }

    .mobile-more-single i {
        font-size: 11px;
        opacity: 0.6;
    }

</style>


{{-- ============================================================
     JAVASCRIPT
     ============================================================ --}}

<script>

    /*
    |--------------------------------------------------------------------------
    | Bottom Sheet
    |--------------------------------------------------------------------------
    */

    function toggleBottomSheet(id) {

        const overlay = document.getElementById(id);

        if (!overlay) {
            return;
        }

        const isActive =
            overlay.classList.contains('active');


        /*
        |--------------------------------------------------------------------------
        | Tutup seluruh bottom sheet yang sedang terbuka
        |--------------------------------------------------------------------------
        */

        document
            .querySelectorAll('.bottom-sheet-overlay.active')
            .forEach(function (item) {

                item.classList.remove('active');

                item.style.opacity = '';
                item.style.pointerEvents = 'none';

            });


        /*
        |--------------------------------------------------------------------------
        | Buka sheet yang dipilih
        |--------------------------------------------------------------------------
        */

        if (!isActive) {

            overlay.classList.add('active');

            overlay.style.opacity = '1';
            overlay.style.pointerEvents = 'auto';

            document.body.style.overflow = 'hidden';

        } else {

            document.body.style.overflow = '';

        }

    }


    /*
    |--------------------------------------------------------------------------
    | Toggle submenu CMS
    |--------------------------------------------------------------------------
    */

    function toggleMobileSubmenu(id, button) {

        const submenu =
            document.getElementById(id);

        if (!submenu) {
            return;
        }


        const isOpen =
            button.getAttribute('aria-expanded') === 'true';


        /*
        |--------------------------------------------------------------------------
        | Tutup submenu lain dalam Menu Lainnya
        |--------------------------------------------------------------------------
        */

        document
            .querySelectorAll('#more-sheet .mobile-more-submenu')
            .forEach(function (item) {

                if (item !== submenu) {

                    item.hidden = true;

                    const parent =
                        item.previousElementSibling;

                    if (parent) {

                        parent.setAttribute(
                            'aria-expanded',
                            'false'
                        );

                    }

                }

            });


        /*
        |--------------------------------------------------------------------------
        | Buka / tutup submenu yang dipilih
        |--------------------------------------------------------------------------
        */

        if (isOpen) {

            submenu.hidden = true;

            button.setAttribute(
                'aria-expanded',
                'false'
            );

        } else {

            submenu.hidden = false;

            button.setAttribute(
                'aria-expanded',
                'true'
            );

        }

    }


    /*
    |--------------------------------------------------------------------------
    | Tutup ketika area luar sheet diklik
    |--------------------------------------------------------------------------
    */

    document.addEventListener('click', function (event) {

        const overlay =
            event.target.closest('.bottom-sheet-overlay');

        if (!overlay) {
            return;
        }

        if (event.target === overlay) {

            toggleBottomSheet(overlay.id);

        }

    });


    /*
    |--------------------------------------------------------------------------
    | ESC
    |--------------------------------------------------------------------------
    */

    document.addEventListener('keydown', function (event) {

        if (event.key !== 'Escape') {
            return;
        }

        document
            .querySelectorAll('.bottom-sheet-overlay.active')
            .forEach(function (overlay) {

                overlay.classList.remove('active');

                overlay.style.opacity = '';
                overlay.style.pointerEvents = 'none';

            });

        document.body.style.overflow = '';

    });

</script>

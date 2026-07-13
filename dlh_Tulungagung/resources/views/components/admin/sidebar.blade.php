@php
    $user = auth()->user();
    $menuItems = [
        ['label' => 'Dashboard', 'route' => 'dashboard', 'permission' => 'Dashboard.View', 'icon' => 'M3 13h8v8H3v-8zm10-10h8v8h-8V3zm0 10h8v8h-8v-8zM3 3h8v8H3V3z'],
        ['label' => 'Users', 'route' => 'admin.users.index', 'permission' => 'Users.View', 'icon' => 'M16 14s-1 0-1 1 1 3 3 3h2c2 0 3-2 3-3s-1-1-1-1h-6zm-8 0s-1 0-1 1 1 3 3 3h2c2 0 3-2 3-3s-1-1-1-1H8zm0-6c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3zm8 0c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3z'],
        ['label' => 'News', 'route' => 'admin.news.index', 'permission' => 'News.View', 'icon' => 'M4 4h16v2H4V4zm0 4h16v2H4V8zm0 4h10v2H4v-2z'],
        ['label' => 'Gallery', 'route' => 'admin.galleries.index', 'permission' => 'Gallery.View', 'icon' => 'M4 5h16v12H4V5zm2 2v8h12V7H6zm3 1l2 2 3-3 4 5H8l1-4z'],
        ['label' => 'Publications', 'route' => 'admin.publications.index', 'permission' => 'Publication.View', 'icon' => 'M6 2h9a2 2 0 0 1 2 2v16l-5-3H6a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2z'],
        ['label' => 'Programs', 'route' => 'admin.programs.index', 'permission' => 'Program.View', 'icon' => 'M8 4h8v2H8V4zm0 4h8v2H8V8zm0 4h8v2H8v-2zm0 4h8v2H8v-2z'],
        ['label' => 'Services', 'route' => 'admin.services.index', 'permission' => 'Service.View', 'icon' => 'M6 4h12v2H6V4zm0 4h12v2H6V8zm0 4h12v2H6v-2zm0 4h12v2H6v-2z'],
        ['label' => 'PPID', 'route' => 'admin.ppid.index', 'permission' => 'PPID.View', 'icon' => 'M4 6h16v12H4V6zm2 2v8h12V8H6zm2 2h8v2H8v-2zm0 4h5v2H8v-2z'],
        ['label' => 'Pages', 'route' => 'admin.pages.index', 'permission' => 'Page.View', 'icon' => 'M4 5h16v14H4V5zm2 2v10h12V7H6zm2 2h8v2H8V9z'],
        ['label' => 'Website Settings', 'route' => 'admin.settings.index', 'permission' => 'Settings.View', 'icon' => 'M12 8a4 4 0 1 0 0 8 4 4 0 0 0 0-8zm8.94 2.06l-1.41-1.41 1.22-1.22-2.12-2.12-1.22 1.22-1.41-1.41L14.94 4H9.06L7.88 5.22 6.66 4 4.54 6.12l1.22 1.22-1.41 1.41L4.06 10l1.22 1.22-1.22 1.22 2.12 2.12 1.22-1.22 1.41 1.41L9.06 20h5.88l1.18-1.22 1.22 1.22 2.12-2.12-1.22-1.22 1.41-1.41L19.94 12z']
    ];
@endphp

<aside {{ $attributes->merge(['class' => 'admin-sidebar bg-white']) }} role="navigation" aria-label="Primary navigation">
    <div class="sidebar-brand">
        <a href="{{ route('dashboard') }}" class="d-flex align-items-center gap-2 text-decoration-none">
            <span class="sidebar-brand-mark"></span>
            <div>
                <div class="h6 mb-0 text-dark">DLH Tulungagung</div>
                <small class="text-muted">Administration</small>
            </div>
        </a>
        <button type="button" class="btn btn-icon d-lg-none" data-admin-toggle-sidebar aria-label="Close navigation">
            <span class="visually-hidden">Close</span>
            <span class="icon-close" aria-hidden="true"></span>
        </button>
    </div>

    <div class="sidebar-scroll">
        <ul class="nav flex-column sidebar-nav" role="menu">
            @foreach($menuItems as $item)
                @if($user && $user->hasPermission($item['permission']))
                    <li class="nav-item">
                        @php $isActive = request()->routeIs($item['route'] . '*'); @endphp
                        <a href="{{ route($item['route']) }}" role="menuitem" class="nav-link {{ $isActive ? 'active' : '' }}" {{ $isActive ? 'aria-current="page"' : '' }}>
                            <span class="sidebar-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" width="20" height="20"><path d="{{ $item['icon'] }}"/></svg>
                            </span>
                            <span>{{ $item['label'] }}</span>
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</aside>

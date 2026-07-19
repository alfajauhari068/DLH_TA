@php
    $user = auth()->user();
    
    // Grouped menus for workspace IA
    $menuGroups = [
        'Workspace' => [
            ['label' => 'Dashboard', 'route' => 'dashboard', 'permission' => 'Dashboard.View', 'icon' => 'grid-1x2', 'badge' => null],
        ],
        'Manajemen Konten' => [
            ['label' => 'Berita', 'route' => 'admin.news.index', 'permission' => 'News.View', 'icon' => 'newspaper', 'badge' => \App\Models\News::count()],
            ['label' => 'Galeri', 'route' => 'admin.galleries.index', 'permission' => 'Gallery.View', 'icon' => 'images', 'badge' => \App\Models\Gallery::count()],
            ['label' => 'Agenda Kegiatan', 'route' => 'admin.agendas.index', 'permission' => 'News.View', 'icon' => 'calendar-event', 'badge' => \App\Models\Agenda::count()],
            ['label' => 'Publikasi', 'route' => 'admin.publications.index', 'permission' => 'Publication.View', 'icon' => 'journal-text', 'badge' => null],
            ['label' => 'Dokumen PPID', 'url' => 'https://ppid.tulungagung.go.id/', 'permission' => 'PPID.View', 'icon' => 'envelope-open', 'badge' => null],
            ['label' => 'Program', 'route' => 'admin.programs.index', 'permission' => 'Program.View', 'icon' => 'briefcase', 'badge' => null],
        ],
        'Data Master' => [
            ['label' => 'Layanan Publik', 'route' => 'admin.services.index', 'permission' => 'Service.View', 'icon' => 'tools', 'badge' => \App\Models\Service::count()],
            ['label' => 'Survei Kepuasan (SKM)', 'route' => 'admin.skm-scores.index', 'permission' => 'Settings.View', 'icon' => 'bar-chart-line', 'badge' => \App\Models\SkmScore::count()],
            ['label' => 'Struktur Bidang', 'route' => 'admin.departments.index', 'permission' => 'Settings.View', 'icon' => 'diagram-3', 'badge' => null],
            ['label' => 'Master Jabatan', 'route' => 'admin.positions.index', 'permission' => 'Settings.View', 'icon' => 'person-badge', 'badge' => null],
            ['label' => 'Data Pejabat', 'route' => 'admin.officials.index', 'permission' => 'Settings.View', 'icon' => 'person-lines-fill', 'badge' => null],
            ['label' => 'Halaman Statis', 'route' => 'admin.pages.index', 'permission' => 'Page.View', 'icon' => 'file-earmark-text', 'badge' => null],
            ['label' => 'Daftar Pengguna', 'route' => 'admin.users.index', 'permission' => 'Users.View', 'icon' => 'people', 'badge' => null],
        ],
        'Pengaturan' => [
            ['label' => 'Konfigurasi Website', 'route' => 'admin.settings.index', 'permission' => 'Settings.View', 'icon' => 'gear', 'badge' => null],
            ['label' => 'Menu Navigasi', 'route' => 'admin.menus.index', 'permission' => 'Settings.View', 'icon' => 'list', 'badge' => null]
        ]
    ];
@endphp

<aside {{ $attributes->merge(['class' => 'w-[280px] shrink-0 bg-slate-900 border-r border-slate-800 flex-shrink-0 hidden lg:flex flex-col h-screen sticky top-0 transition-all duration-300 z-40']) }} role="navigation" aria-label="Primary navigation">
    <!-- Sidebar Header / Logo -->
    <div class="h-[72px] px-6 flex items-center border-b border-slate-800 shrink-0">
        <a href="{{ route('dashboard') }}" class="flex items-center gap-3 no-underline group w-full min-w-0">
            <img src="{{ asset('images/icon-dinas.png') }}" alt="Logo DLH" class="shrink-0" style="width: 40px; height: 40px; object-fit: contain;">
            <div class="flex-1 min-w-0">
                <h4 class="text-sm font-bold text-white truncate leading-none mb-1">DLH Tulungagung</h4>
                <p class="text-[10px] text-slate-400 truncate leading-none">Administration Hub</p>
            </div>
        </a>
    </div>

    <!-- User Profile Card inside Sidebar -->
    <div class="px-2 py-2 border-b border-slate-800 bg-slate-900 shrink-0">
        <div class="flex items-center gap-3 p-2 bg-slate-800 rounded-2xl border border-slate-700 shadow-soft">
            <div class="w-10 h-10 rounded-xl bg-primary/20 text-emerald-400 font-bold flex items-center justify-center shrink-0">
                {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
            </div>
            <div class="min-w-0 flex-1">
                <h5 class="text-[11px] font-bold text-white truncate leading-tight">{{ auth()->user()->name ?? 'Administrator' }}</h5>
                <span class="text-[9px] font-semibold text-emerald-400 uppercase tracking-wider">{{ auth()->user()->role->name ?? 'Admin' }}</span>
            </div>
        </div>
    </div>

    <!-- Search Menu Input -->
    <div class="px-2 pt-2 shrink-0">
        <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="bi bi-search text-slate-400 text-xs"></i>
            </div>
            <input type="text" id="sidebar-menu-search" class="block w-full pl-9 pr-3 py-2 border border-slate-700 rounded-xl text-xs bg-slate-800 text-white placeholder-slate-400 focus:outline-none focus:bg-slate-700 focus:ring-2 focus:ring-emerald-500/50 transition-all" placeholder="Cari menu...">
        </div>
    </div>

    <!-- Grouped Menu List -->
    <div class="flex-1 overflow-y-auto py-4 px-3 custom-scrollbar">
        <nav class="space-y-6">
            @foreach($menuGroups as $groupLabel => $items)
                <div class="menu-group-container">
                    <div class="text-sm font-semibold text-slate-500 uppercase tracking-wide px-4 mb-2">{{ $groupLabel }}</div>
                    <ul class="space-y-1" role="menu">
                        @foreach($items as $item)
                            @if($user && $user->hasPermission($item['permission']))
                                @php 
                                    $isActive = isset($item['route']) ? request()->routeIs($item['route'] . '*') : false; 
                                    $iconClass = $isActive ? 'text-white' : 'text-slate-400 group-hover:text-white transition-colors duration-300';
                                    $bgClass = $isActive ? 'bg-emerald-600 text-white shadow-sm shadow-emerald-600/20' : 'text-slate-400 hover:bg-slate-800 hover:text-white';
                                    $href = isset($item['url']) ? $item['url'] : route($item['route']);
                                    $target = isset($item['url']) ? '_blank' : '_self';
                                @endphp
                                <li>
                                    <a href="{{ $href }}" target="{{ $target }}"
                                       role="menuitem" 
                                       data-menu-label="{{ $item['label'] }}"
                                       class="group flex items-center gap-3 px-4 py-2.5 rounded-2xl transition-all duration-300 hover:translate-x-1 {{ $bgClass }}"
                                       {{ $isActive ? 'aria-current="page"' : '' }}>
                                        
                                        <i class="bi bi-{{ $item['icon'] }} text-md transition-colors {{ $iconClass }}"></i>
                                        <span class="text-xs truncate flex-1">{{ $item['label'] }}</span>
                                        
                                        @if($item['badge'])
                                            <span class="text-[10px] font-extrabold px-2 py-0.5 rounded-full {{ $isActive ? 'bg-white text-emerald-700 shadow-sm' : 'bg-slate-800 text-slate-400' }}">
                                                {{ $item['badge'] }}
                                            </span>
                                        @endif

                                        @if($isActive && !$item['badge'])
                                            <div class="w-1.5 h-1.5 rounded-full bg-white shadow-[0_0_8px_rgba(255,255,255,0.6)]"></div>
                                        @endif
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </nav>
    </div>
    
    <!-- Sidebar Footer -->
    <div class="p-2 border-t border-slate-800 shrink-0 bg-slate-900">
        <div class="bg-slate-800/80 border border-slate-700 rounded-2xl p-1 text-center shadow-soft">
            <p class="text-[10px] text-slate-400 font-medium uppercase tracking-wider mb-0.5">Versi Sistem</p>
            <p class="text-xs font-black text-white">v2.1.0-L10</p>
        </div>
    </div>
</aside>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const searchInput = document.getElementById('sidebar-menu-search');
        if (searchInput) {
            searchInput.addEventListener('input', (e) => {
                const term = e.target.value.toLowerCase().trim();
                const menuItems = document.querySelectorAll('[data-menu-label]');
                const groupContainers = document.querySelectorAll('.menu-group-container');
                
                menuItems.forEach(item => {
                    const label = item.getAttribute('data-menu-label').toLowerCase();
                    const li = item.closest('li');
                    if (label.includes(term)) {
                        li.style.display = '';
                    } else {
                        li.style.display = 'none';
                    }
                });
                
                // Hide groups with no visible items
                groupContainers.forEach(group => {
                    const visibleItems = group.querySelectorAll('ul li[style=""]');
                    const allItems = group.querySelectorAll('ul li');
                    const hiddenItems = group.querySelectorAll('ul li[style="display: none;"]');
                    
                    if (hiddenItems.length === allItems.length) {
                        group.style.display = 'none';
                    } else {
                        group.style.display = '';
                    }
                });
            });
        }
    });
</script>

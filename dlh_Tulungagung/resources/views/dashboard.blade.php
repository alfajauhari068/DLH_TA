@extends('layouts.admin')

@section('title', 'Dashboard')
@section('subtitle', 'Welcome back, ' . (auth()->user()->name ?? 'Admin') . '. Today is ' . now()->format('d F Y') . '.')

@section('actions')
    <div class="flex gap-2">
        <x-ui.button href="{{ route('dashboard') }}" variant="outline" size="sm" icon="bar-chart">Overview</x-ui.button>
        <x-ui.button href="{{ route('admin.news.create') }}" variant="primary" size="sm" icon="plus-lg">Create Content</x-ui.button>
    </div>
@endsection

@section('breadcrumb')
    <x-ui.breadcrumb :items="[
        ['label' => 'Dashboard', 'url' => route('dashboard')],
        ['label' => 'Workspace'],
    ]" />
@endsection

@section('content')
    <!-- Primary KPI Section -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
        @php
            $totalNews = \App\Models\News::count();
            $totalGalleries = \App\Models\Gallery::count();
            $totalPPID = \App\Models\PpidDocument::count();
            $totalServices = \App\Models\Service::count();
        @endphp
        
        <x-ui.stat-card 
            title="Total News Published" 
            value="{{ $totalNews }}" 
            icon="newspaper"
            variant="success"
            trend="up"
            trendValue="12%"
            description="Since last month"
        />
        
        <x-ui.stat-card 
            title="Today's Website Visitors" 
            value="5,220" 
            icon="people"
            variant="primary"
            trend="up"
            trendValue="8.4%"
            description="Active sessions now"
        />

        <x-ui.stat-card 
            title="PPID Documents" 
            value="{{ $totalPPID }}" 
            icon="envelope-open"
            variant="info"
            trend="up"
            trendValue="4%"
            description="Verified documents"
        />

        <x-ui.stat-card 
            title="Active Services" 
            value="{{ $totalServices }}" 
            icon="tools"
            variant="warning"
            trend="down"
            trendValue="-2%"
            description="Public services"
        />
    </div>

    <!-- Main Workspace Grid Layout -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-12">
        
        <!-- Left Side: Analytics, Content Management, and Activities (Span 2) -->
        <div class="lg:col-span-2 space-y-6">
            
            <!-- Analytics Section (Prepared Layout - No Fake Charts) -->
            <x-ui.card title="System & Traffic Analytics" subtitle="Analytical metrics and traffic statistics interface.">
                <div class="mt-4">
                    <!-- Tabbed Header -->
                    <div class="flex flex-wrap gap-2 border-b border-gray-100 pb-3 mb-4">
                        <button class="px-4 py-2 text-xs font-bold bg-primary/10 text-primary border border-primary/20 rounded-xl transition-all">Visitor Traffic</button>
                        <button class="px-4 py-2 text-xs font-bold text-gray-400 hover:text-gray-600 transition-all">Content Growth</button>
                        <button class="px-4 py-2 text-xs font-bold text-gray-400 hover:text-gray-600 transition-all">Downloads</button>
                        <button class="px-4 py-2 text-xs font-bold text-gray-400 hover:text-gray-600 transition-all">Complaints</button>
                        <button class="px-4 py-2 text-xs font-bold text-gray-400 hover:text-gray-600 transition-all">Environmental Data</button>
                    </div>

                    <!-- Prepared Layout Placeholder -->
                    <div class="border-2 border-dashed border-gray-150 rounded-2xl p-8 flex flex-col items-center justify-center text-center bg-gray-50/30 min-h-[220px]">
                        <div class="w-14 h-14 rounded-2xl bg-gray-100 text-gray-400 flex items-center justify-center mb-3">
                            <i class="bi bi-graph-up-arrow text-2xl"></i>
                        </div>
                        <h4 class="text-sm font-bold text-gray-800 mb-1">Analytics Integration Ready</h4>
                        <p class="text-xs text-gray-400 max-w-sm leading-relaxed">This workspace container is fully prepared for future integration with backend metrics services (such as Chart.js or Plausible API).</p>
                    </div>
                </div>
            </x-ui.card>

            <!-- Content Management Section (7 Modules) -->
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-base font-bold text-gray-900 leading-none">Content Management Systems</h3>
                        <p class="text-xs text-gray-400 mt-1">Overview of registered modules and data counters.</p>
                    </div>
                </div>

                @php
                    $newsCount = \App\Models\News::count();
                    $galleryCount = \App\Models\Gallery::count();
                    $programCount = \App\Models\Program::count();
                    $servicesCount = \App\Models\Service::count();
                    $publicationsCount = \App\Models\Publication::count();
                    $ppidCount = \App\Models\PpidDocument::count();
                    $pagesCount = \App\Models\Page::count();

                    $newsLatest = \App\Models\News::latest()->first()?->updated_at?->diffForHumans() ?? 'No records';
                    $galleryLatest = \App\Models\Gallery::latest()->first()?->updated_at?->diffForHumans() ?? 'No records';
                    $programLatest = \App\Models\Program::latest()->first()?->updated_at?->diffForHumans() ?? 'No records';
                    $servicesLatest = \App\Models\Service::latest()->first()?->updated_at?->diffForHumans() ?? 'No records';
                    $publicationsLatest = \App\Models\Publication::latest()->first()?->updated_at?->diffForHumans() ?? 'No records';
                    $ppidLatest = \App\Models\PpidDocument::latest()->first()?->updated_at?->diffForHumans() ?? 'No records';
                    $pagesLatest = \App\Models\Page::latest()->first()?->updated_at?->diffForHumans() ?? 'No records';
                @endphp

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- News Card -->
                    <div class="bg-white/95 backdrop-blur-sm border border-gray-100 rounded-2xl p-4 flex items-center justify-between shadow-soft hover:shadow-hover hover:-translate-y-0.5 transition-all duration-300">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-success/10 text-success border border-success/15 flex items-center justify-center shrink-0">
                                <i class="bi bi-newspaper text-lg"></i>
                            </div>
                            <div class="min-w-0">
                                <h4 class="text-xs font-bold text-gray-800">News Articles</h4>
                                <p class="text-[10px] text-gray-400 mt-0.5">Updated: {{ $newsLatest }}</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-lg font-black text-gray-900">{{ $newsCount }}</span>
                            <x-ui.button href="{{ route('admin.news.index') }}" variant="ghost" size="sm" class="px-2.5 py-1.5"><i class="bi bi-arrow-right"></i></x-ui.button>
                        </div>
                    </div>

                    <!-- Gallery Card -->
                    <div class="bg-white/95 backdrop-blur-sm border border-gray-100 rounded-2xl p-4 flex items-center justify-between shadow-soft hover:shadow-hover hover:-translate-y-0.5 transition-all duration-300">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-warning/10 text-warning border border-warning/15 flex items-center justify-center shrink-0">
                                <i class="bi bi-images text-lg"></i>
                            </div>
                            <div class="min-w-0">
                                <h4 class="text-xs font-bold text-gray-800">Gallery Items</h4>
                                <p class="text-[10px] text-gray-400 mt-0.5">Updated: {{ $galleryLatest }}</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-lg font-black text-gray-900">{{ $galleryCount }}</span>
                            <x-ui.button href="{{ route('admin.galleries.index') }}" variant="ghost" size="sm" class="px-2.5 py-1.5"><i class="bi bi-arrow-right"></i></x-ui.button>
                        </div>
                    </div>

                    <!-- Programs Card -->
                    <div class="bg-white/95 backdrop-blur-sm border border-gray-100 rounded-2xl p-4 flex items-center justify-between shadow-soft hover:shadow-hover hover:-translate-y-0.5 transition-all duration-300">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-primary/10 text-primary border border-primary/15 flex items-center justify-center shrink-0">
                                <i class="bi bi-briefcase text-lg"></i>
                            </div>
                            <div class="min-w-0">
                                <h4 class="text-xs font-bold text-gray-800">Programs</h4>
                                <p class="text-[10px] text-gray-400 mt-0.5">Updated: {{ $programLatest }}</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-lg font-black text-gray-900">{{ $programCount }}</span>
                            <x-ui.button href="{{ route('admin.programs.index') }}" variant="ghost" size="sm" class="px-2.5 py-1.5"><i class="bi bi-arrow-right"></i></x-ui.button>
                        </div>
                    </div>

                    <!-- Services Card -->
                    <div class="bg-white/95 backdrop-blur-sm border border-gray-100 rounded-2xl p-4 flex items-center justify-between shadow-soft hover:shadow-hover hover:-translate-y-0.5 transition-all duration-300">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-info/10 text-info border border-info/15 flex items-center justify-center shrink-0">
                                <i class="bi bi-tools text-lg"></i>
                            </div>
                            <div class="min-w-0">
                                <h4 class="text-xs font-bold text-gray-800">Active Services</h4>
                                <p class="text-[10px] text-gray-400 mt-0.5">Updated: {{ $servicesLatest }}</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-lg font-black text-gray-900">{{ $servicesCount }}</span>
                            <x-ui.button href="{{ route('admin.services.index') }}" variant="ghost" size="sm" class="px-2.5 py-1.5"><i class="bi bi-arrow-right"></i></x-ui.button>
                        </div>
                    </div>

                    <!-- Publications Card -->
                    <div class="bg-white/95 backdrop-blur-sm border border-gray-100 rounded-2xl p-4 flex items-center justify-between shadow-soft hover:shadow-hover hover:-translate-y-0.5 transition-all duration-300">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-secondary/10 text-secondary border border-secondary/15 flex items-center justify-center shrink-0">
                                <i class="bi bi-journal-text text-lg"></i>
                            </div>
                            <div class="min-w-0">
                                <h4 class="text-xs font-bold text-gray-800">Publications</h4>
                                <p class="text-[10px] text-gray-400 mt-0.5">Updated: {{ $publicationsLatest }}</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-lg font-black text-gray-900">{{ $publicationsCount }}</span>
                            <x-ui.button href="{{ route('admin.publications.index') }}" variant="ghost" size="sm" class="px-2.5 py-1.5"><i class="bi bi-arrow-right"></i></x-ui.button>
                        </div>
                    </div>

                    <!-- PPID Card -->
                    <div class="bg-white/95 backdrop-blur-sm border border-gray-100 rounded-2xl p-4 flex items-center justify-between shadow-soft hover:shadow-hover hover:-translate-y-0.5 transition-all duration-300">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-danger/10 text-danger border border-danger/15 flex items-center justify-center shrink-0">
                                <i class="bi bi-envelope-open text-lg"></i>
                            </div>
                            <div class="min-w-0">
                                <h4 class="text-xs font-bold text-gray-800">PPID Documents</h4>
                                <p class="text-[10px] text-gray-400 mt-0.5">Updated: {{ $ppidLatest }}</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-lg font-black text-gray-900">{{ $ppidCount }}</span>
                            <x-ui.button href="{{ route('admin.ppid.index') }}" variant="ghost" size="sm" class="px-2.5 py-1.5"><i class="bi bi-arrow-right"></i></x-ui.button>
                        </div>
                    </div>

                    <!-- Pages Card -->
                    <div class="bg-white/95 backdrop-blur-sm border border-gray-100 rounded-2xl p-4 flex items-center justify-between shadow-soft hover:shadow-hover hover:-translate-y-0.5 transition-all duration-300 md:col-span-2">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-gray-100 text-gray-500 border border-gray-200 flex items-center justify-center shrink-0">
                                <i class="bi bi-file-earmark-text text-lg"></i>
                            </div>
                            <div class="min-w-0">
                                <h4 class="text-xs font-bold text-gray-800">Static Pages</h4>
                                <p class="text-[10px] text-gray-400 mt-0.5">Updated: {{ $pagesLatest }}</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-lg font-black text-gray-900">{{ $pagesCount }}</span>
                            <x-ui.button href="{{ route('admin.pages.index') }}" variant="ghost" size="sm" class="px-2.5 py-1.5"><i class="bi bi-arrow-right"></i></x-ui.button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activities (Timeline Feed) -->
            <x-ui.card title="Recent Activities" subtitle="Timeline of latest administrative log actions.">
                <div class="relative pl-6 border-l-2 border-gray-100 space-y-6 mt-4 ml-3">
                    <div class="relative">
                        <div class="absolute -left-[31px] top-0.5 bg-success text-white w-5 h-5 rounded-full flex items-center justify-center shadow-md">
                            <i class="bi bi-newspaper text-[10px]"></i>
                        </div>
                        <div class="flex flex-col md:flex-row md:justify-between items-start md:items-center gap-2">
                            <div>
                                <div class="flex items-center gap-2">
                                    <span class="text-xs font-bold text-success uppercase tracking-wider">News</span>
                                    <x-ui.badge variant="success">Published</x-ui.badge>
                                </div>
                                <p class="text-sm font-semibold text-gray-900 mt-1">Dinas Lingkungan Hidup meresmikan bank sampah baru di Tulungagung.</p>
                                <span class="text-xs text-gray-400 mt-0.5 inline-block">By Administrator</span>
                            </div>
                            <span class="text-xs text-gray-400 whitespace-nowrap">2 hours ago</span>
                        </div>
                    </div>

                    <div class="relative">
                        <div class="absolute -left-[31px] top-0.5 bg-warning text-white w-5 h-5 rounded-full flex items-center justify-center shadow-md">
                            <i class="bi bi-images text-[10px]"></i>
                        </div>
                        <div class="flex flex-col md:flex-row md:justify-between items-start md:items-center gap-2">
                            <div>
                                <div class="flex items-center gap-2">
                                    <span class="text-xs font-bold text-warning uppercase tracking-wider">Gallery</span>
                                    <x-ui.badge variant="warning">Pending</x-ui.badge>
                                </div>
                                <p class="text-sm font-semibold text-gray-900 mt-1">Menambahkan 15 dokumentasi foto aksi bersih sungai Brantas.</p>
                                <span class="text-xs text-gray-400 mt-0.5 inline-block">By Editor</span>
                            </div>
                            <span class="text-xs text-gray-400 whitespace-nowrap">3 hours ago</span>
                        </div>
                    </div>

                    <div class="relative">
                        <div class="absolute -left-[31px] top-0.5 bg-info text-white w-5 h-5 rounded-full flex items-center justify-center shadow-md">
                            <i class="bi bi-envelope-open text-[10px]"></i>
                        </div>
                        <div class="flex flex-col md:flex-row md:justify-between items-start md:items-center gap-2">
                            <div>
                                <div class="flex items-center gap-2">
                                    <span class="text-xs font-bold text-info uppercase tracking-wider">PPID</span>
                                    <x-ui.badge variant="info">Verified</x-ui.badge>
                                </div>
                                <p class="text-sm font-semibold text-gray-900 mt-1">Laporan Keuangan Triwulan II disetujui untuk konsumsi publik.</p>
                                <span class="text-xs text-gray-400 mt-0.5 inline-block">By Admin PPID</span>
                            </div>
                            <span class="text-xs text-gray-400 whitespace-nowrap">5 hours ago</span>
                        </div>
                    </div>
                </div>
            </x-ui.card>
        </div>

        <!-- Right Side: Quick Actions, System Information (Span 1) -->
        <div class="lg:col-span-1 space-y-6">
            
            <!-- Quick Actions Panel -->
            <x-ui.card title="Quick Action Panel" subtitle="Start administrative tasks immediately.">
                <div class="grid grid-cols-2 gap-3 mt-2">
                    <a href="{{ route('admin.news.create') }}" class="p-3 bg-gray-50/50 hover:bg-primary/5 hover:shadow-soft border border-gray-100 rounded-2xl flex flex-col items-center justify-center text-center transition-all duration-300 hover:-translate-y-0.5 group">
                        <div class="w-10 h-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center mb-2 shadow-sm group-hover:scale-110 transition-transform">
                            <i class="bi bi-newspaper"></i>
                        </div>
                        <span class="text-xs font-semibold text-gray-900 group-hover:text-primary transition-colors">Create News</span>
                    </a>
                    <a href="{{ route('admin.galleries.index') }}" class="p-3 bg-gray-50/50 hover:bg-warning/5 hover:shadow-soft border border-gray-100 rounded-2xl flex flex-col items-center justify-center text-center transition-all duration-300 hover:-translate-y-0.5 group">
                        <div class="w-10 h-10 rounded-xl bg-warning/10 text-warning flex items-center justify-center mb-2 shadow-sm group-hover:scale-110 transition-transform">
                            <i class="bi bi-images"></i>
                        </div>
                        <span class="text-xs font-semibold text-gray-900 group-hover:text-warning transition-colors">Upload Gallery</span>
                    </a>
                    <a href="{{ route('admin.publications.create') }}" class="p-3 bg-gray-50/50 hover:bg-success/5 hover:shadow-soft border border-gray-100 rounded-2xl flex flex-col items-center justify-center text-center transition-all duration-300 hover:-translate-y-0.5 group">
                        <div class="w-10 h-10 rounded-xl bg-success/10 text-success flex items-center justify-center mb-2 shadow-sm group-hover:scale-110 transition-transform">
                            <i class="bi bi-journal-text"></i>
                        </div>
                        <span class="text-xs font-semibold text-gray-900 group-hover:text-success transition-colors">+ Publication</span>
                    </a>
                    <a href="{{ route('admin.users.index') }}" class="p-3 bg-gray-50/50 hover:bg-danger/5 hover:shadow-soft border border-gray-100 rounded-2xl flex flex-col items-center justify-center text-center transition-all duration-300 hover:-translate-y-0.5 group">
                        <div class="w-10 h-10 rounded-xl bg-danger/10 text-danger flex items-center justify-center mb-2 shadow-sm group-hover:scale-110 transition-transform">
                            <i class="bi bi-people"></i>
                        </div>
                        <span class="text-xs font-semibold text-gray-900 group-hover:text-danger transition-colors">Manage Users</span>
                    </a>
                    <a href="{{ route('admin.services.index') }}" class="p-3 bg-gray-50/50 hover:bg-info/5 hover:shadow-soft border border-gray-100 rounded-2xl flex flex-col items-center justify-center text-center transition-all duration-300 hover:-translate-y-0.5 group">
                        <div class="w-10 h-10 rounded-xl bg-info/10 text-info flex items-center justify-center mb-2 shadow-sm group-hover:scale-110 transition-transform">
                            <i class="bi bi-tools"></i>
                        </div>
                        <span class="text-xs font-semibold text-gray-900 group-hover:text-info transition-colors">Manage Services</span>
                    </a>
                    <a href="{{ route('admin.settings.index') }}" class="p-3 bg-gray-50/50 hover:bg-secondary/5 hover:shadow-soft border border-gray-100 rounded-2xl flex flex-col items-center justify-center text-center transition-all duration-300 hover:-translate-y-0.5 group">
                        <div class="w-10 h-10 rounded-xl bg-secondary/10 text-secondary flex items-center justify-center mb-2 shadow-sm group-hover:scale-110 transition-transform">
                            <i class="bi bi-gear"></i>
                        </div>
                        <span class="text-xs font-semibold text-gray-900 group-hover:text-secondary transition-colors">Open Settings</span>
                    </a>
                </div>
            </x-ui.card>

            <!-- System Information -->
            <x-ui.card title="System Information" subtitle="Platform technical parameters and credentials.">
                <dl class="space-y-3 mt-2">
                    <div class="flex justify-between items-center pb-3 border-b border-gray-100 last:border-0 last:pb-0">
                        <dt class="text-xs text-gray-500">Laravel Version</dt>
                        <dd class="text-xs font-bold text-gray-900">{{ app()->version() }}</dd>
                    </div>
                    <div class="flex justify-between items-center pb-3 border-b border-gray-100 last:border-0 last:pb-0">
                        <dt class="text-xs text-gray-500">PHP Version</dt>
                        <dd class="text-xs font-bold text-gray-900">{{ phpversion() }}</dd>
                    </div>
                    <div class="flex justify-between items-center pb-3 border-b border-gray-100 last:border-0 last:pb-0">
                        <dt class="text-xs text-gray-500">Environment</dt>
                        <dd class="text-xs font-bold text-gray-900">{{ app()->environment() }}</dd>
                    </div>
                    <div class="flex justify-between items-center pb-3 border-b border-gray-100 last:border-0 last:pb-0">
                        <dt class="text-xs text-gray-500">Last Login</dt>
                        <dd class="text-xs font-bold text-gray-900">Today</dd>
                    </div>
                    <div class="flex justify-between items-center pb-3 border-b border-gray-100 last:border-0 last:pb-0">
                        <dt class="text-xs text-gray-500">CMS Version</dt>
                        <dd class="text-xs font-bold text-gray-900">v2.1.0-L10</dd>
                    </div>
                    <div class="flex justify-between items-center pb-3 border-b border-gray-100 last:border-0 last:pb-0">
                        <dt class="text-xs text-gray-500">Build Status</dt>
                        <dd class="text-xs font-bold text-success flex items-center gap-1.5">
                            <span class="inline-block w-2 h-2 rounded-full bg-success animate-pulse"></span> Passing
                        </dd>
                    </div>
                </dl>
            </x-ui.card>
        </div>
    </div>
@endsection

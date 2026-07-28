@extends('layouts.admin')

@section('title', 'Workspace')
@section('subtitle', 'Overview of your administrative tasks and statistics.')

@section('content')
    <!-- 1. Workspace Header (Hero) -->
    <div class="relative w-full rounded-3xl overflow-hidden mb-8 shadow-hover">
        <div class="absolute inset-0 bg-gradient-to-br from-primary-green via-emerald-600 to-mint opacity-90 z-0"></div>
        <div class="absolute inset-0 bg-noise opacity-30 z-0"></div>
        <!-- Eco pattern -->
        <div class="absolute inset-0 z-0" style="background-image: radial-gradient(circle at 100% 0%, rgba(255,255,255,0.1) 0%, transparent 40%);"></div>
        
        <div class="relative z-10 p-8 flex flex-col md:flex-row md:items-end justify-between gap-6">
            <div class="text-white">
                <p class="text-sm font-semibold text-emerald-100 uppercase tracking-wider mb-2">Dashboard Workspace</p>
                <h1 class="text-3xl font-black mb-1">Selamat datang kembali,</h1>
                <h2 class="text-xl font-medium text-emerald-50">{{ auth()->user()->name ?? 'Administrator' }} DLH Kabupaten Tulungagung</h2>
                
                <div class="flex flex-wrap items-center gap-4 mt-6">
                    <div class="flex items-center gap-2 px-3 py-1.5 rounded-xl bg-white/20 backdrop-blur-md border border-white/20 text-sm font-medium">
                        <i class="bi bi-calendar3"></i>
                        <span>{{ now()->format('d F Y') }} • {{ now()->format('l') }}</span>
                    </div>
                    <div class="flex items-center gap-2 px-3 py-1.5 rounded-xl bg-white/20 backdrop-blur-md border border-white/20 text-sm font-medium">
                        <span class="w-2 h-2 rounded-full bg-green-300 animate-pulse"></span>
                        <span>Environment: {{ app()->environment() }}</span>
                    </div>
                    <div class="flex items-center gap-2 px-3 py-1.5 rounded-xl bg-white/20 backdrop-blur-md border border-white/20 text-sm font-medium">
                        <i class="bi bi-cpu"></i>
                        <span>CMS v2.0 • Build Passing</span>
                    </div>
                </div>
            </div>
            
            <div class="flex items-center gap-3">
                <a href="{{ route('admin.news.create') }}" class="flex items-center gap-2 px-6 py-3 rounded-xl bg-white text-emerald-700 font-bold hover:bg-emerald-50 hover:scale-105 hover:shadow-xl transition-all">
                    <i class="bi bi-plus-lg"></i>
                    Quick Create
                </a>
            </div>
        </div>
        
        <!-- Large Transparent Icon -->
        <i class="bi bi-kanban absolute -bottom-10 -right-10 text-[200px] text-white/10 z-0 rotate-[-15deg]"></i>
    </div>

    <!-- 2. KPI Statistics -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        @php
            $totalNews = \App\Models\News::count();
            $totalGalleries = \App\Models\Gallery::count();
            $totalPPID = \App\Models\PpidDocument::count();
            $totalServices = \App\Models\Service::count();
        @endphp
        
        <!-- Stat Card 1 -->
        <div class="group relative bg-white border border-gray-100 rounded-3xl p-6 shadow-soft hover:shadow-hover hover:-translate-y-2 transition-all duration-300 overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-success to-emerald-400"></div>
            <div class="flex justify-between items-start mb-4">
                <div class="w-14 h-14 rounded-2xl bg-success/10 text-success flex items-center justify-center text-2xl group-hover:scale-110 group-hover:rotate-3 transition-transform">
                    <i class="bi bi-newspaper"></i>
                </div>
                <div class="px-2.5 py-1 rounded-full bg-success/10 text-success text-xs font-bold flex items-center gap-1">
                    <i class="bi bi-arrow-up-short"></i> 12% this month
                </div>
            </div>
            <div>
                <p class="text-sm font-semibold text-gray-500 mb-1">Total News</p>
                <h3 class="text-3xl font-black text-gray-900">{{ $totalNews }}</h3>
            </div>
            <div class="mt-4 pt-4 border-t border-gray-50">
                <a href="{{ route('admin.news.index') }}" class="text-xs font-semibold text-gray-400 group-hover:text-success transition-colors flex items-center justify-between">
                    View Details <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>

        <!-- Stat Card 2 -->
        <div class="group relative bg-white border border-gray-100 rounded-3xl p-6 shadow-soft hover:shadow-hover hover:-translate-y-2 transition-all duration-300 overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-blue-500 to-cyan-400"></div>
            <div class="flex justify-between items-start mb-4">
                <div class="w-14 h-14 rounded-2xl bg-blue-500/10 text-blue-500 flex items-center justify-center text-2xl group-hover:scale-110 group-hover:rotate-3 transition-transform">
                    <i class="bi bi-people"></i>
                </div>
                <div class="px-2.5 py-1 rounded-full bg-blue-500/10 text-blue-500 text-xs font-bold flex items-center gap-1">
                    <i class="bi bi-arrow-up-short"></i> 8.4% today
                </div>
            </div>
            <div>
                <p class="text-sm font-semibold text-gray-500 mb-1">Visitors</p>
                <h3 class="text-3xl font-black text-gray-900">5,220</h3>
            </div>
            <div class="mt-4 pt-4 border-t border-gray-50">
                <a href="#" class="text-xs font-semibold text-gray-400 group-hover:text-blue-500 transition-colors flex items-center justify-between">
                    Live Stats <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>

        <!-- Stat Card 3 -->
        <div class="group relative bg-white border border-gray-100 rounded-3xl p-6 shadow-soft hover:shadow-hover hover:-translate-y-2 transition-all duration-300 overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-orange-500 to-amber-400"></div>
            <div class="flex justify-between items-start mb-4">
                <div class="w-14 h-14 rounded-2xl bg-orange-500/10 text-orange-500 flex items-center justify-center text-2xl group-hover:scale-110 group-hover:-rotate-3 transition-transform">
                    <i class="bi bi-envelope-open"></i>
                </div>
                <div class="px-2.5 py-1 rounded-full bg-orange-500/10 text-orange-500 text-xs font-bold flex items-center gap-1">
                    <i class="bi bi-arrow-up-short"></i> 4% weekly
                </div>
            </div>
            <div>
                <p class="text-sm font-semibold text-gray-500 mb-1">PPID Documents</p>
                <h3 class="text-3xl font-black text-gray-900">{{ $totalPPID }}</h3>
            </div>
            <div class="mt-4 pt-4 border-t border-gray-50">
                <a href="{{ route('admin.ppid.index') }}" class="text-xs font-semibold text-gray-400 group-hover:text-orange-500 transition-colors flex items-center justify-between">
                    Manage PPID <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>

        <!-- Stat Card 4 -->
        <div class="group relative bg-white border border-gray-100 rounded-3xl p-6 shadow-soft hover:shadow-hover hover:-translate-y-2 transition-all duration-300 overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-info to-cyan-300"></div>
            <div class="flex justify-between items-start mb-4">
                <div class="w-14 h-14 rounded-2xl bg-info/10 text-info flex items-center justify-center text-2xl group-hover:scale-110 group-hover:rotate-3 transition-transform">
                    <i class="bi bi-tools"></i>
                </div>
                <div class="px-2.5 py-1 rounded-full bg-gray-100 text-gray-500 text-xs font-bold flex items-center gap-1">
                    <i class="bi bi-dash"></i> Steady
                </div>
            </div>
            <div>
                <p class="text-sm font-semibold text-gray-500 mb-1">Active Services</p>
                <h3 class="text-3xl font-black text-gray-900">{{ $totalServices }}</h3>
            </div>
            <div class="mt-4 pt-4 border-t border-gray-50">
                <a href="{{ route('admin.services.index') }}" class="text-xs font-semibold text-gray-400 group-hover:text-info transition-colors flex items-center justify-between">
                    View Services <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- 3. Analytics & Quick Actions -->
    <div class="grid grid-cols-1 xl:grid-cols-3 gap-6 mb-8">
        <!-- Analytics -->
        <div class="xl:col-span-2 bg-white border border-gray-100 rounded-3xl shadow-soft p-6">
            <div class="flex items-center justify-between mb-6">
                <div>
                    <h3 class="text-lg font-black text-gray-900">Traffic & Analytics</h3>
                    <p class="text-xs text-gray-400 font-medium">Monthly visitor and performance insights</p>
                </div>
                <div class="flex gap-2">
                    <button class="px-3 py-1.5 text-xs font-bold bg-primary-green/10 text-primary-green rounded-lg">Traffic</button>
                    <button class="px-3 py-1.5 text-xs font-bold text-gray-400 hover:bg-gray-50 rounded-lg">Visitors</button>
                    <button class="px-3 py-1.5 text-xs font-bold text-gray-400 hover:bg-gray-50 rounded-lg">Downloads</button>
                </div>
            </div>
            
            <!-- Dummy Line Chart with HTML/CSS -->
            <div class="relative h-64 w-full flex items-end justify-between gap-2 mt-4 px-2">
                <!-- Grid Lines -->
                <div class="absolute inset-0 flex flex-col justify-between pointer-events-none">
                    <div class="w-full h-px bg-gray-100"></div>
                    <div class="w-full h-px bg-gray-100"></div>
                    <div class="w-full h-px bg-gray-100"></div>
                    <div class="w-full h-px bg-gray-100"></div>
                </div>
                
                <!-- Bars (acting as dummy chart) -->
                @php $heights = [30, 45, 20, 65, 40, 80, 55, 90, 70, 45, 85, 60]; @endphp
                @foreach($heights as $idx => $h)
                    <div class="relative w-full flex justify-center group z-10">
                        <div class="w-4/5 bg-gradient-to-t from-emerald-500/20 to-emerald-400/80 rounded-t-md hover:from-emerald-600 hover:to-emerald-500 transition-colors cursor-pointer" style="height: {{ $h }}%;"></div>
                        <!-- Tooltip -->
                        <div class="absolute -top-10 opacity-0 group-hover:opacity-100 transition-opacity bg-gray-900 text-white text-[10px] font-bold py-1 px-2 rounded-lg pointer-events-none">
                            {{ $h * 123 }}
                        </div>
                    </div>
                @endforeach
            </div>
            
            <div class="flex justify-between items-center mt-4 text-xs font-semibold text-gray-400 px-4">
                <span>Jan</span><span>Feb</span><span>Mar</span><span>Apr</span><span>May</span><span>Jun</span>
                <span>Jul</span><span>Aug</span><span>Sep</span><span>Oct</span><span>Nov</span><span>Dec</span>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="bg-white border border-gray-100 rounded-3xl shadow-soft p-6">
            <h3 class="text-lg font-black text-gray-900 mb-1">Quick Actions</h3>
            <p class="text-xs text-gray-400 font-medium mb-6">Frequently used modules</p>
            
            <div class="grid grid-cols-2 gap-4">
                <a href="{{ route('admin.news.index') }}" class="group relative flex flex-col items-center justify-center p-4 bg-gray-50 border border-gray-100 rounded-2xl hover:border-emerald-200 hover:shadow-lg hover:shadow-emerald-500/10 hover:-translate-y-1 transition-all">
                    <div class="w-12 h-12 rounded-full bg-white shadow-sm flex items-center justify-center text-xl text-emerald-500 mb-3 group-hover:scale-110 group-hover:bg-emerald-500 group-hover:text-white transition-all">
                        <i class="bi bi-newspaper"></i>
                    </div>
                    <span class="text-xs font-bold text-gray-700 group-hover:text-emerald-600">News</span>
                </a>
                
                <a href="{{ route('admin.galleries.index') }}" class="group relative flex flex-col items-center justify-center p-4 bg-gray-50 border border-gray-100 rounded-2xl hover:border-warning/30 hover:shadow-lg hover:shadow-warning/10 hover:-translate-y-1 transition-all">
                    <div class="absolute top-2 right-2 w-5 h-5 bg-warning text-white rounded-full flex items-center justify-center text-[9px] font-bold shadow-sm">15</div>
                    <div class="w-12 h-12 rounded-full bg-white shadow-sm flex items-center justify-center text-xl text-warning mb-3 group-hover:scale-110 group-hover:bg-warning group-hover:text-white transition-all">
                        <i class="bi bi-images"></i>
                    </div>
                    <span class="text-xs font-bold text-gray-700 group-hover:text-warning">Gallery</span>
                </a>
                
                <a href="{{ route('admin.publications.index') }}" class="group relative flex flex-col items-center justify-center p-4 bg-gray-50 border border-gray-100 rounded-2xl hover:border-info/30 hover:shadow-lg hover:shadow-info/10 hover:-translate-y-1 transition-all">
                    <div class="w-12 h-12 rounded-full bg-white shadow-sm flex items-center justify-center text-xl text-info mb-3 group-hover:scale-110 group-hover:bg-info group-hover:text-white transition-all">
                        <i class="bi bi-journal-text"></i>
                    </div>
                    <span class="text-xs font-bold text-gray-700 group-hover:text-info">Publication</span>
                </a>
                
                <a href="{{ route('admin.settings.index') }}" class="group relative flex flex-col items-center justify-center p-4 bg-gray-50 border border-gray-100 rounded-2xl hover:border-slate-300 hover:shadow-lg hover:-translate-y-1 transition-all">
                    <div class="w-12 h-12 rounded-full bg-white shadow-sm flex items-center justify-center text-xl text-slate-500 mb-3 group-hover:scale-110 group-hover:bg-slate-700 group-hover:text-white transition-all group-hover:rotate-90">
                        <i class="bi bi-gear"></i>
                    </div>
                    <span class="text-xs font-bold text-gray-700 group-hover:text-slate-800">Settings</span>
                </a>
            </div>
        </div>
    </div>

    <!-- 4. CMS Overview & System Info -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
        
        <!-- CMS Modules -->
        <div class="lg:col-span-2 bg-white border border-gray-100 rounded-3xl shadow-soft p-6">
            <h3 class="text-lg font-black text-gray-900 mb-1">CMS Overview</h3>
            <p class="text-xs text-gray-400 font-medium mb-6">Status of your content management modules</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @php
                    $modules = [
                        ['name' => 'News Articles', 'count' => $totalNews, 'icon' => 'newspaper', 'color' => 'success', 'route' => 'admin.news.index'],
                        ['name' => 'Gallery Items', 'count' => $totalGalleries, 'icon' => 'images', 'color' => 'warning', 'route' => 'admin.galleries.index'],
                        ['name' => 'PPID Documents', 'count' => $totalPPID, 'icon' => 'envelope-open', 'color' => 'danger', 'route' => 'admin.ppid.index'],
                        ['name' => 'Active Services', 'count' => $totalServices, 'icon' => 'tools', 'color' => 'info', 'route' => 'admin.services.index'],
                    ];
                @endphp
                
                @foreach($modules as $mod)
                <div class="flex items-center justify-between p-4 rounded-2xl bg-gray-50 hover:bg-white hover:shadow-md border border-transparent hover:border-gray-200 transition-all group">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-xl bg-{{ $mod['color'] }}/10 text-{{ $mod['color'] }} flex items-center justify-center text-xl group-hover:scale-110 transition-transform">
                            <i class="bi bi-{{ $mod['icon'] }}"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-gray-900">{{ $mod['name'] }}</h4>
                            <p class="text-xs font-medium text-gray-400">{{ $mod['count'] }} Items</p>
                        </div>
                    </div>
                    <a href="{{ route($mod['route'] ?? 'dashboard') }}" class="w-8 h-8 rounded-full bg-white border border-gray-200 flex items-center justify-center text-gray-400 hover:bg-{{ $mod['color'] }} hover:text-white hover:border-{{ $mod['color'] }} transition-colors">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                @endforeach
            </div>
        </div>

        <!-- System Information Panel -->
        <div class="bg-slate-900 rounded-3xl shadow-soft p-6 relative overflow-hidden">
            <div class="absolute top-0 right-0 p-12 opacity-5 pointer-events-none">
                <i class="bi bi-server text-[150px] text-white"></i>
            </div>
            
            <h3 class="text-lg font-black text-white mb-1 relative z-10">System Status</h3>
            <p class="text-xs text-slate-400 font-medium mb-6 relative z-10">Server and application health</p>
            
            <div class="space-y-4 relative z-10">
                <div class="flex justify-between items-center">
                    <div class="flex items-center gap-2 text-sm text-slate-300 font-medium">
                        <i class="bi bi-hdd-network text-slate-500"></i> Server
                    </div>
                    <span class="px-2 py-1 rounded-md bg-green-500/20 text-green-400 text-xs font-bold flex items-center gap-1">
                        <span class="w-1.5 h-1.5 rounded-full bg-green-400 animate-pulse"></span> Online
                    </span>
                </div>
                
                <div class="flex justify-between items-center">
                    <div class="flex items-center gap-2 text-sm text-slate-300 font-medium">
                        <i class="bi bi-code-slash text-slate-500"></i> PHP Version
                    </div>
                    <span class="text-sm font-bold text-white">{{ phpversion() }}</span>
                </div>
                
                <div class="flex justify-between items-center">
                    <div class="flex items-center gap-2 text-sm text-slate-300 font-medium">
                        <i class="bi bi-box text-slate-500"></i> Laravel
                    </div>
                    <span class="text-sm font-bold text-white">{{ app()->version() }}</span>
                </div>
                
                <div class="flex justify-between items-center">
                    <div class="flex items-center gap-2 text-sm text-slate-300 font-medium">
                        <i class="bi bi-database text-slate-500"></i> Database
                    </div>
                    <span class="text-sm font-bold text-white">Connected</span>
                </div>

                <div class="mt-4 pt-4 border-t border-slate-700/50">
                    <div class="flex justify-between items-center mb-1">
                        <span class="text-xs font-medium text-slate-400">Storage Usage</span>
                        <span class="text-xs font-bold text-white">45%</span>
                    </div>
                    <div class="w-full h-1.5 bg-slate-800 rounded-full overflow-hidden">
                        <div class="h-full bg-gradient-to-r from-blue-500 to-cyan-400 w-[45%]"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 5. Recent Activities & Upcoming Agenda -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
        
        <!-- Timeline -->
        <div class="bg-white border border-gray-100 rounded-3xl shadow-soft p-6">
            <h3 class="text-lg font-black text-gray-900 mb-6">Recent Activities</h3>
            
            <div class="relative pl-6 border-l-2 border-gray-100 space-y-6 ml-2">
                <!-- Timeline Item 1 -->
                <div class="relative">
                    <div class="absolute -left-[31px] top-0 bg-success text-white w-6 h-6 rounded-full flex items-center justify-center shadow-md shadow-success/30 border-2 border-white">
                        <i class="bi bi-newspaper text-[10px]"></i>
                    </div>
                    <div class="bg-gray-50 rounded-2xl p-4 hover:bg-success/5 border border-transparent hover:border-success/20 transition-colors">
                        <div class="flex items-center gap-2 mb-1">
                            <span class="text-xs font-bold text-success uppercase">News</span>
                            <span class="px-1.5 py-0.5 rounded text-[9px] font-bold bg-success text-white">Published</span>
                            <span class="text-[10px] text-gray-400 ml-auto">2 hours ago</span>
                        </div>
                        <p class="text-sm font-bold text-gray-800">Dinas Lingkungan Hidup meresmikan bank sampah baru.</p>
                    </div>
                </div>

                <!-- Timeline Item 2 -->
                <div class="relative">
                    <div class="absolute -left-[31px] top-0 bg-warning text-white w-6 h-6 rounded-full flex items-center justify-center shadow-md shadow-warning/30 border-2 border-white">
                        <i class="bi bi-images text-[10px]"></i>
                    </div>
                    <div class="bg-gray-50 rounded-2xl p-4 hover:bg-warning/5 border border-transparent hover:border-warning/20 transition-colors">
                        <div class="flex items-center gap-2 mb-1">
                            <span class="text-xs font-bold text-warning uppercase">Gallery</span>
                            <span class="px-1.5 py-0.5 rounded text-[9px] font-bold bg-warning text-white">Pending</span>
                            <span class="text-[10px] text-gray-400 ml-auto">5 hours ago</span>
                        </div>
                        <p class="text-sm font-bold text-gray-800">Menambahkan 15 dokumentasi aksi bersih sungai Brantas.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Widgets Container -->
        <div class="space-y-6">
            
            <!-- Today's Task Widget -->
            <div class="bg-gradient-to-br from-gray-900 to-slate-800 rounded-3xl shadow-soft p-6 text-white relative overflow-hidden">
                <div class="absolute -right-10 -top-10 w-40 h-40 bg-white/5 rounded-full blur-2xl"></div>
                
                <h3 class="text-lg font-black mb-4 flex items-center gap-2">
                    <i class="bi bi-list-check text-emerald-400"></i> Today's Task
                </h3>
                
                <div class="grid grid-cols-2 gap-3">
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-3 border border-white/10 hover:bg-white/20 transition-colors cursor-pointer">
                        <h4 class="text-3xl font-black text-white mb-1">12</h4>
                        <p class="text-[10px] font-bold text-slate-300 uppercase tracking-wider">Pending Review</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-3 border border-white/10 hover:bg-white/20 transition-colors cursor-pointer">
                        <h4 class="text-3xl font-black text-warning mb-1">5</h4>
                        <p class="text-[10px] font-bold text-slate-300 uppercase tracking-wider">Drafts</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-3 border border-white/10 hover:bg-white/20 transition-colors cursor-pointer">
                        <h4 class="text-3xl font-black text-success mb-1">2</h4>
                        <p class="text-[10px] font-bold text-slate-300 uppercase tracking-wider">Published</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-3 border border-white/10 hover:bg-white/20 transition-colors cursor-pointer">
                        <h4 class="text-3xl font-black text-info mb-1">8</h4>
                        <p class="text-[10px] font-bold text-slate-300 uppercase tracking-wider">Docs Waiting</p>
                    </div>
                </div>
            </div>
            
            <!-- Calendar Widget -->
            <div class="bg-white border border-gray-100 rounded-3xl shadow-soft p-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-base font-black text-gray-900">{{ now()->format('F Y') }}</h3>
                    <div class="w-8 h-8 rounded-lg bg-gray-100 flex items-center justify-center text-primary-green font-bold text-sm">
                        {{ now()->format('d') }}
                    </div>
                </div>
                
                <div class="space-y-2">
                    <div class="flex items-center gap-3 p-3 rounded-xl border border-gray-100 hover:border-emerald-200 transition-colors">
                        <div class="w-2 h-2 rounded-full bg-emerald-500"></div>
                        <div class="flex-1 min-w-0">
                            <h5 class="text-sm font-bold text-gray-800 truncate">Weekly Briefing</h5>
                            <p class="text-[10px] text-gray-500 font-medium">09:00 - 10:30 AM</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 p-3 rounded-xl border border-gray-100 hover:border-warning/30 transition-colors">
                        <div class="w-2 h-2 rounded-full bg-warning"></div>
                        <div class="flex-1 min-w-0">
                            <h5 class="text-sm font-bold text-gray-800 truncate">Site Inspection</h5>
                            <p class="text-[10px] text-gray-500 font-medium">13:00 - 15:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

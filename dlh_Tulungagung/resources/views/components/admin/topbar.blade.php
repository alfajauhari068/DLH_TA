<div class="h-[72px] px-6 flex items-center justify-between w-full">
    
    <div class="flex items-center gap-4 flex-1 min-w-0">
        <!-- Mobile Sidebar Toggle -->
        <button type="button" class="lg:hidden w-10 h-10 rounded-xl bg-gray-50 text-gray-500 hover:bg-gray-100 hover:text-gray-900 flex items-center justify-center transition-colors" data-admin-toggle-sidebar aria-label="Toggle navigation">
            <i class="bi bi-list text-xl"></i>
        </button>

        <!-- Search Bar -->
        <div class="hidden md:block max-w-[480px] w-full">
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="bi bi-search text-gray-400"></i>
                </div>
                <input type="text" class="block w-full pl-10 pr-3 py-2 border border-gray-200 rounded-xl leading-5 bg-gray-50 placeholder-gray-400 focus:outline-none focus:bg-white focus:ring-2 focus:ring-primary/20 focus:border-primary sm:text-sm transition-colors" placeholder="Cari data...">
            </div>
        </div>
    </div>

    <!-- Right section -->
    <div class="flex items-center gap-3 shrink-0">
        
        <!-- Notifications -->
        <button type="button" class="relative w-10 h-10 rounded-xl bg-gray-50 text-gray-500 hover:bg-gray-100 hover:text-gray-900 flex items-center justify-center transition-colors" aria-label="Notifications" title="Notifications">
            <i class="bi bi-bell text-lg"></i>
            <span class="absolute top-2 right-2 w-2.5 h-2.5 bg-danger rounded-full border-2 border-white"></span>
        </button>

        <div class="h-8 w-px bg-gray-200 mx-1 hidden sm:block"></div>

        <!-- Profile Dropdown (Using Alpine or Bootstrap Dropdown) -->
        <div class="dropdown">
            <button class="flex items-center gap-3 p-1 rounded-xl hover:bg-gray-50 transition-colors focus:outline-none" type="button" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="w-10 h-10 rounded-xl bg-primary/10 text-primary font-bold flex items-center justify-center shrink-0">
                    {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
                </div>
                <div class="hidden sm:block text-left">
                    <p class="text-sm font-semibold text-gray-900 leading-none mb-1">{{ auth()->user()->name ?? 'Administrator' }}</p>
                    <p class="text-xs text-muted leading-none">Admin</p>
                </div>
                <i class="bi bi-chevron-down text-gray-400 text-sm hidden sm:block"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-end border-0 shadow-hover rounded-xl mt-2 p-2 min-w-[200px]" aria-labelledby="profileDropdown">
                <li><a class="dropdown-item rounded-lg px-3 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-primary transition-colors flex items-center gap-2" href="{{ route('admin.users.edit', auth()->id()) }}"><i class="bi bi-person"></i> Profil Saya</a></li>
                <li><a class="dropdown-item rounded-lg px-3 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-primary transition-colors flex items-center gap-2" href="{{ route('admin.settings.index') }}"><i class="bi bi-gear"></i> Pengaturan</a></li>
                <li><hr class="dropdown-divider my-2 border-gray-100"></li>
                <li>
                    <x-logout-button class="dropdown-item rounded-lg px-3 py-2 text-sm text-danger hover:bg-danger/10 hover:text-danger transition-colors flex items-center gap-2 w-full text-left">
                        <i class="bi bi-box-arrow-right"></i> Keluar
                    </x-logout-button>
                </li>
            </ul>
        </div>
        
    </div>
</div>

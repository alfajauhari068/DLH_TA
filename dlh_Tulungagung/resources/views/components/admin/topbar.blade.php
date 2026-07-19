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
                <input type="text" class="block w-full pl-10 pr-3 py-2 border border-slate-200/80 rounded-xl leading-5 bg-slate-50 placeholder-slate-400 focus:outline-none focus:bg-white focus:ring-2 focus:ring-emerald-500/20 focus:border-emerald-500 sm:text-sm transition-colors" placeholder="Cari data...">
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

        <!-- Profile Dropdown (Native Implementation) -->
        <div class="relative" id="profile-dropdown-container">
            <button class="flex items-center gap-3 p-1 rounded-2xl hover:bg-primary/5 transition-colors focus:outline-none" type="button" id="profileDropdownBtn" aria-expanded="false">
                <div class="w-10 h-10 rounded-xl bg-primary/10 text-primary font-bold flex items-center justify-center shrink-0">
                    {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
                </div>
                <div class="hidden sm:block text-left">
                    <p class="text-sm font-semibold text-gray-900 leading-none mb-1">{{ auth()->user()->name ?? 'Administrator' }}</p>
                    <p class="text-xs text-muted leading-none">Admin</p>
                </div>
                <i class="bi bi-chevron-down text-gray-400 text-sm hidden sm:block transition-transform duration-300" id="profileDropdownIcon"></i>
            </button>
            
            <div id="profileDropdownMenu" class="absolute right-0 mt-2 w-56 bg-white/95 backdrop-blur-sm rounded-2xl shadow-glass border border-gray-100 p-2 invisible opacity-0 transform scale-95 transition-all duration-300 z-50 origin-top-right">
                <a class="flex items-center gap-3 rounded-xl px-4 py-2.5 text-sm text-gray-700 hover:bg-primary/5 hover:text-primary transition-colors w-full font-medium" href="{{ route('admin.users.edit', auth()->id()) }}">
                    <i class="bi bi-person text-lg text-gray-400"></i> Profil Saya
                </a>
                <a class="flex items-center gap-3 rounded-xl px-4 py-2.5 text-sm text-gray-700 hover:bg-primary/5 hover:text-primary transition-colors w-full font-medium" href="{{ route('admin.settings.index') }}">
                    <i class="bi bi-gear text-lg text-gray-400"></i> Pengaturan
                </a>
                <hr class="my-2 border-gray-100">
                <x-logout-button class="flex items-center gap-3 rounded-xl px-4 py-2.5 text-sm text-danger hover:bg-danger/10 hover:text-danger transition-colors w-full text-left font-medium">
                    <i class="bi bi-box-arrow-right text-lg"></i> Keluar
                </x-logout-button>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const btn = document.getElementById('profileDropdownBtn');
                const menu = document.getElementById('profileDropdownMenu');
                const icon = document.getElementById('profileDropdownIcon');
                
                if (btn && menu && icon) {
                    btn.addEventListener('click', (e) => {
                        e.stopPropagation();
                        const isExpanded = btn.getAttribute('aria-expanded') === 'true';
                        btn.setAttribute('aria-expanded', !isExpanded);
                        
                        if (!isExpanded) {
                            menu.classList.remove('invisible', 'opacity-0', 'scale-95');
                            menu.classList.add('opacity-100', 'scale-100');
                            icon.classList.add('rotate-180');
                        } else {
                            menu.classList.add('invisible', 'opacity-0', 'scale-95');
                            menu.classList.remove('opacity-100', 'scale-100');
                            icon.classList.remove('rotate-180');
                        }
                    });

                    document.addEventListener('click', (e) => {
                        if (!menu.contains(e.target) && !btn.contains(e.target)) {
                            btn.setAttribute('aria-expanded', 'false');
                            menu.classList.add('invisible', 'opacity-0', 'scale-95');
                            menu.classList.remove('opacity-100', 'scale-100');
                            icon.classList.remove('rotate-180');
                        }
                    });
                }
            });
        </script>
        
    </div>
</div>

<div class="bg-white border-b border-gray-100/80 relative z-20">
    <div class="container max-w-[1440px] px-8 md:px-16 lg:px-24 mx-auto py-5 md:py-6">
        <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-6 lg:gap-8">
            
            <!-- Breadcrumbs Left Column -->
            <div class="flex items-center justify-between lg:justify-start w-full lg:w-auto">
                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-2 text-xs md:text-sm font-semibold tracking-wide">
                        <li class="inline-flex items-center">
                            <a href="{{ url('/') }}" class="inline-flex items-center text-emerald-800/80 hover:text-primary transition-colors duration-200">
                                <i class="bi bi-house-door me-1.5 text-base text-primary/80"></i>
                                Beranda
                            </a>
                        </li>
                        <li class="flex items-center">
                            <i class="bi bi-chevron-right text-gray-400 text-[10px] mx-1"></i>
                            <span class="text-gray-400 font-medium">Pelayanan Lingkungan</span>
                        </li>
                        <li class="flex items-center">
                            <i class="bi bi-chevron-right text-gray-400 text-[10px] mx-1"></i>
                            <span class="text-gray-900 font-bold">Statistik</span>
                        </li>
                    </ol>
                </nav>
            </div>

            <!-- Stats Right Column -->
            <div class="w-full lg:w-auto">
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 md:gap-8 lg:gap-10">
                    
                    <!-- Stat Item: Berita -->
                    <div class="flex items-center gap-3 bg-gray-50/50 hover:bg-emerald-50/30 p-2.5 md:p-3 rounded-2xl border border-gray-100 hover:border-emerald-100/50 transition-all duration-300 group">
                        <div class="w-10 h-10 rounded-xl bg-emerald-50 text-primary flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shrink-0">
                            <i class="bi bi-newspaper text-lg"></i>
                        </div>
                        <div>
                            <div class="text-lg md:text-xl font-extrabold text-gray-900 leading-tight">136</div>
                            <div class="text-[11px] md:text-xs font-semibold text-gray-500 tracking-wider uppercase">Berita</div>
                        </div>
                    </div>

                    <!-- Stat Item: Layanan -->
                    <div class="flex items-center gap-3 bg-gray-50/50 hover:bg-emerald-50/30 p-2.5 md:p-3 rounded-2xl border border-gray-100 hover:border-emerald-100/50 transition-all duration-300 group">
                        <div class="w-10 h-10 rounded-xl bg-emerald-50 text-primary flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shrink-0">
                            <i class="bi bi-grid-1x2-fill text-base"></i>
                        </div>
                        <div>
                            <div class="text-lg md:text-xl font-extrabold text-gray-900 leading-tight">18</div>
                            <div class="text-[11px] md:text-xs font-semibold text-gray-500 tracking-wider uppercase">Layanan</div>
                        </div>
                    </div>

                    <!-- Stat Item: Program -->
                    <div class="flex items-center gap-3 bg-gray-50/50 hover:bg-emerald-50/30 p-2.5 md:p-3 rounded-2xl border border-gray-100 hover:border-emerald-100/50 transition-all duration-300 group">
                        <div class="w-10 h-10 rounded-xl bg-emerald-50 text-primary flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shrink-0">
                            <i class="bi bi-check-circle-fill text-base"></i>
                        </div>
                        <div>
                            <div class="text-lg md:text-xl font-extrabold text-gray-900 leading-tight">12</div>
                            <div class="text-[11px] md:text-xs font-semibold text-gray-500 tracking-wider uppercase">Program</div>
                        </div>
                    </div>

                    <!-- Stat Item: Dokumen -->
                    <div class="flex items-center gap-3 bg-gray-50/50 hover:bg-emerald-50/30 p-2.5 md:p-3 rounded-2xl border border-gray-100 hover:border-emerald-100/50 transition-all duration-300 group">
                        <div class="w-10 h-10 rounded-xl bg-emerald-50 text-primary flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shrink-0">
                            <i class="bi bi-file-earmark-text text-base"></i>
                        </div>
                        <div>
                            <div class="text-lg md:text-xl font-extrabold text-gray-900 leading-tight">24</div>
                            <div class="text-[11px] md:text-xs font-semibold text-gray-500 tracking-wider uppercase">Dokumen</div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

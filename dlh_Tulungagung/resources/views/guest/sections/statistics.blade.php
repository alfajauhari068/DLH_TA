<section class="relative py-14 md:py-20 lg:py-28 bg-primary-dark overflow-hidden">
    <!-- Top SVG Divider (Organic Wave) -->
    <div class="absolute top-0 left-0 w-full overflow-hidden leading-[0] z-0 pointer-events-none rotate-180">
        <svg class="relative block w-full h-[40px] md:h-[60px] lg:h-[80px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" fill="var(--surface-green)"></path>
        </svg>
    </div>

    <!-- Organic noise pattern overlay -->
    <div class="absolute inset-0 opacity-[0.03] mix-blend-overlay pointer-events-none bg-noise-pattern"></div>

    <div class="container relative z-10 px-4 mt-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <!-- Left Side: Large Environmental Image -->
            <div class="lg:col-span-5 relative h-full min-h-[500px]">
                <div class="absolute inset-0 rounded-[32px] overflow-hidden shadow-sm bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1466611653911-95081537e5b7?q=80&w=1000&auto=format&fit=crop" alt="Lingkungan Hijau Tulungagung" loading="lazy" decoding="async" class="w-full h-full object-cover">
                    <!-- Image Gradient Overlay -->
                    <div class="absolute inset-x-0 bottom-0 p-8 bg-gradient-to-t from-gray-900/90 to-transparent">
                        <h4 class="text-white text-2xl font-bold mb-2">Inisiatif Hijau 2026</h4>
                        <p class="text-white/80 text-sm font-medium"><i class="bi bi-geo-alt-fill text-accent me-2"></i>Kabupaten Tulungagung</p>
                    </div>
                </div>
                
                <!-- Attached decorative element -->
                <div class="absolute -top-6 -right-6 w-24 h-24 bg-white/10 backdrop-blur-md rounded-full shadow-glass flex items-center justify-center z-20 border border-white/20">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center">
                        <i class="bi bi-globe-americas text-white text-3xl drop-shadow"></i>
                    </div>
                </div>
            </div>

            <!-- Right Side: Overlapping Infographic Dashboard -->
            <div class="lg:col-span-7">
                <div class="mb-10">
                    <span class="inline-block px-4 py-2 bg-white/10 text-white font-bold text-xs uppercase tracking-widest rounded-full mb-6 border border-white/20">Dampak Nyata</span>
                    <h2 class="text-4xl md:text-5xl font-black text-white mb-6 leading-tight">Capaian Strategis Lingkungan Hidup</h2>
                    <p class="text-lg text-white/70 leading-relaxed">Angka dan data yang merepresentasikan dedikasi nyata kami dalam membangun ekosistem Tulungagung yang asri dan berkelanjutan.</p>
                </div>

                <!-- Infographic Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <!-- Stat 1: Mini chart -->
                    <x-guest.statistic-card 
                        icon="bi-tree-fill" 
                        value="45" 
                        label="Program Ruang Hijau" 
                        suffix="+" 
                        colorTheme="light-green" 
                        textColor="primary">
                        <span class="px-3 py-1 bg-light-green text-primary text-xs font-bold rounded-full">+12%</span>
                        <x-slot name="chart">
                            <div class="bg-gray-50 rounded-xl p-3 mt-2 border border-gray-100">
                                <div class="flex items-end gap-1.5 h-10 w-full">
                                    <div class="bg-primary/20 hover:bg-primary/40 rounded-t-sm w-full h-[40%] transition-colors cursor-pointer"></div>
                                    <div class="bg-primary/40 hover:bg-primary/60 rounded-t-sm w-full h-[60%] transition-colors cursor-pointer"></div>
                                    <div class="bg-primary hover:bg-primary/80 rounded-t-sm w-full h-[100%] transition-colors cursor-pointer shadow-sm relative group/bar">
                                        <div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-gray-900 text-white text-[10px] px-2 py-1 rounded opacity-0 group-hover/bar:opacity-100 transition-opacity whitespace-nowrap pointer-events-none">Q3</div>
                                    </div>
                                    <div class="bg-primary/60 hover:bg-primary/80 rounded-t-sm w-full h-[70%] transition-colors cursor-pointer"></div>
                                    <div class="bg-primary/30 hover:bg-primary/50 rounded-t-sm w-full h-[40%] transition-colors cursor-pointer"></div>
                                </div>
                            </div>
                        </x-slot>
                    </x-guest.statistic-card>

                    <!-- Stat 2: Progress -->
                    <x-guest.statistic-card 
                        icon="bi-emoji-smile-fill" 
                        value="98" 
                        label="Indeks Kepuasan" 
                        suffix="%" 
                        colorTheme="blue-50" 
                        textColor="blue-500">
                        <i class="bi bi-graph-up-arrow text-blue-200 text-2xl"></i>
                        <x-slot name="chart">
                            <div class="w-full h-2.5 bg-blue-50 rounded-full mt-2 overflow-hidden">
                                <div class="h-full bg-blue-500 rounded-full w-0 transition-all duration-1000 ease-out progress-fill" data-target="98%"></div>
                            </div>
                        </x-slot>
                    </x-guest.statistic-card>

                    <!-- Stat 3: People -->
                    <x-guest.statistic-card 
                        icon="bi-people-fill" 
                        value="120" 
                        label="Aparatur & Tenaga Ahli" 
                        suffix="+" 
                        colorTheme="orange-50" 
                        textColor="orange-500">
                    </x-guest.statistic-card>

                    <!-- Stat 4: Awards -->
                    <x-guest.statistic-card 
                        icon="bi-award-fill" 
                        value="15" 
                        label="Penghargaan Nasional" 
                        colorTheme="purple-50" 
                        textColor="purple-500">
                    </x-guest.statistic-card>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Progress bars
                    const progressBars = entry.target.querySelectorAll('.progress-fill');
                    progressBars.forEach(bar => {
                        bar.style.width = bar.getAttribute('data-target');
                    });
                    
                    // Counters
                    const counters = entry.target.querySelectorAll('.counter');
                    counters.forEach(counter => {
                        const target = +counter.getAttribute('data-target');
                        const duration = 2000;
                        const step = target / (duration / 16);
                        let current = 0;
                        
                        const updateCounter = () => {
                            current += step;
                            if (current < target) {
                                counter.innerText = Math.ceil(current);
                                requestAnimationFrame(updateCounter);
                            } else {
                                counter.innerText = target;
                            }
                        };
                        updateCounter();
                    });
                    
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.2 });
        
        document.querySelectorAll('section').forEach(section => {
            observer.observe(section);
        });
    });
</script>
@endpush

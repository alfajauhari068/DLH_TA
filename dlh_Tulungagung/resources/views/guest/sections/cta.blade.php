<section class="relative pt-14 pb-20 md:pt-20 md:pb-28 lg:pt-28 lg:pb-40 overflow-hidden bg-primary-dark">
    <!-- Abstract Organic SVG Blobs / Floating Shapes -->
    <div class="absolute top-0 right-0 -mr-40 -mt-40 w-[600px] h-[600px] bg-accent/20 rounded-full blur-[100px] pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 -ml-40 -mb-40 w-[600px] h-[600px] bg-white/10 rounded-full blur-[100px] pointer-events-none"></div>
    
    <!-- Pattern Overlay -->
    <div class="absolute inset-0 opacity-[0.05] pointer-events-none bg-dot-pattern"></div>
    

    <!-- Bottom Wave Divider (Transition to Footer) -->
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-[0] z-0 pointer-events-none">
        <svg class="relative block w-full h-[40px] md:h-[60px] lg:h-[80px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V120H1200C1132.19,120,1055.71,111.31,985.66,92.83Z" fill="#111827"></path>
        </svg>
    </div>

    <div class="container relative z-10 px-4">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-0 items-center">
            
            <!-- Left Side: Rich Layered CTA Content -->
            <div class="lg:col-span-7 bg-white/10 backdrop-blur-xl p-10 md:p-16 rounded-[32px] shadow-glass relative border border-white/20 z-20">
                <span class="inline-block px-4 py-2 bg-white/20 text-white font-bold text-xs uppercase tracking-widest rounded-full mb-6 shadow-sm border border-white/30 backdrop-blur-md">Partisipasi Aktif</span>
                
                <h2 class="text-4xl md:text-5xl font-black text-white mb-6 leading-tight drop-shadow-md">Punya Ide atau Temuan di Lapangan?</h2>
                
                <p class="text-lg text-white/80 mb-10 leading-relaxed">
                    Lingkungan yang asri dimulai dari kepedulian kita bersama. Jangan ragu untuk melaporkan isu lingkungan atau memberikan saran membangun kepada kami.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ url('/kontak') }}" class="group relative flex items-center justify-center gap-3 bg-accent text-primary-dark font-black px-8 py-4 rounded-full shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300 overflow-hidden focus:outline-none focus:ring-2 focus:ring-accent focus:ring-offset-2 focus:ring-offset-primary">
                        <div class="absolute inset-0 bg-white/20 translate-y-full group-hover:translate-y-0 transition-transform duration-300 ease-out"></div>
                        <i class="bi bi-chat-dots-fill text-xl relative z-10" aria-hidden="true"></i> 
                        <span class="relative z-10">Hubungi Kami</span>
                    </a>
                    
                    <a href="https://www.lapor.go.id/" target="_blank" class="group relative flex items-center justify-center gap-3 bg-white/10 text-white font-medium px-8 py-4 rounded-full border border-white/40 hover:border-white hover:bg-white/20 hover:-translate-y-1 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-primary">
                        <i class="bi bi-megaphone-fill text-xl" aria-hidden="true"></i>
                        <span>LAPOR! Pusat</span>
                    </a>
                </div>
            </div>

            <!-- Right Side: Beautiful Environmental Illustration / Image Layering -->
            <div class="hidden lg:block lg:col-span-5 relative h-full min-h-[500px] -ml-10 z-10">
                <!-- Main Image -->
                <div class="absolute right-0 top-1/2 -translate-y-1/2 w-4/5 aspect-[4/3] rounded-[40px] overflow-hidden shadow-floating border-[10px] border-white/20 backdrop-blur-md z-10">
                    <img src="https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?q=80&w=1000&auto=format&fit=crop" class="w-full h-full object-cover hover:scale-105 transition-transform duration-700 ease-out" alt="Masyarakat Hijau">
                </div>
                
                <!-- Overlapping Smaller Image for Depth -->
                <div class="absolute -left-10 bottom-10 w-[240px] aspect-square rounded-3xl overflow-hidden shadow-2xl border-8 border-white/20 backdrop-blur-md z-20 animate-fade-up">
                    <img src="https://images.unsplash.com/photo-1622322675704-517865c19734?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover" alt="Kerja Bakti">
                </div>
                
                <!-- Floating Eco Icon -->
                <div class="absolute top-20 -left-6 w-20 h-20 bg-white rounded-full shadow-xl z-30 flex items-center justify-center animate-fade-down">
                    <i class="bi bi-recycle text-primary text-4xl" aria-hidden="true"></i>
                </div>
            </div>

        </div>
    </div>
</section>

@props(['href', 'icon', 'title', 'description', 'image' => 'https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?q=80&w=800&auto=format&fit=crop'])

<div class="col-span-1 flex justify-center">
    <a href="{{ $href }}" class="group relative flex flex-col w-full max-w-[400px] h-[480px] bg-white rounded-3xl overflow-hidden soft-shadow hover-lift transition-all duration-300 cursor-pointer border border-gray-100 focus:outline-none focus:ring-2 focus:ring-primary-green focus:ring-offset-2">
        <!-- Top Image Area (Fixed 220px Height per Spec) -->
        <div class="relative w-full h-[220px] overflow-hidden bg-gray-100 flex-shrink-0">
            <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-in-out">
            <div class="absolute inset-0 bg-gray-900/10 group-hover:bg-transparent transition-colors duration-500"></div>
            
            <!-- Floating Icon Anchor -->
            <div class="absolute -bottom-6 right-6 w-12 h-12 rounded-2xl bg-white flex items-center justify-center text-primary-green shadow-md group-hover:bg-primary-green group-hover:text-white transition-colors duration-300 z-10 border border-gray-50" aria-hidden="true">
                <i class="bi {{ $icon }} text-xl"></i>
            </div>
        </div>
        
        <!-- Bottom Text Area -->
        <div class="flex flex-col flex-grow p-8 bg-white relative z-0">
            <h4 class="text-xl font-bold text-slate-900 mb-4 group-hover:text-primary-green transition-colors duration-300">{{ $title }}</h4>
            <p class="text-gray-500 text-sm leading-relaxed mb-6 line-clamp-3">
                {{ $description }}
            </p>
            <div class="mt-auto flex items-center gap-2 text-primary-green font-bold text-xs uppercase tracking-widest">
                <span>Pelajari Detail</span>
                <i class="bi bi-arrow-right transform group-hover:translate-x-2 transition-transform duration-300" aria-hidden="true"></i>
            </div>
        </div>
    </a>
</div>

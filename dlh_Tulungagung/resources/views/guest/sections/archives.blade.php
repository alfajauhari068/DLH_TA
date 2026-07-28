<section class="relative py-14 md:py-20 lg:py-28 bg-white overflow-hidden">
    
    <!-- Decorative Leaf Background -->
    <div class="absolute top-1/2 right-0 opacity-5 pointer-events-none transform translate-x-1/3 -translate-y-1/2">
        <i class="bi bi-tree text-[400px] text-primary"></i>
    </div>

    <div class="container px-4 relative z-10">
        
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-12 gap-6">
            <div class="max-w-2xl">
                <span class="inline-block px-4 py-2 bg-[#F8FAFC] text-primary font-bold text-xs uppercase tracking-widest rounded-full mb-6 shadow-sm border border-gray-100">Arsip & Dokumen</span>
                <h2 class="text-4xl lg:text-5xl font-black text-gray-900 mb-4 leading-tight">Archives</h2>
                <p class="text-gray-500 text-lg leading-relaxed">Daftar publikasi dan dokumen resmi terbaru dari Dinas Lingkungan Hidup Kabupaten Tulungagung.</p>
            </div>
            <a href="{{ route('publications') }}" class="group inline-flex items-center gap-2 px-6 py-3 bg-[#F8FAFC] text-gray-700 font-bold rounded-full border border-gray-200 hover:border-primary hover:text-primary transition-all duration-300 shadow-sm hover:shadow-md hover:-translate-y-0.5">
                Lihat Semua <i class="bi bi-arrow-right transform group-hover:translate-x-1 transition-transform"></i>
            </a>
        </div>

        @if(isset($archives) && $archives->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($archives as $item)
                    @php
                        $imageUrl = null;
                        $isValidPath = function($path) {
                            return !empty($path) && !str_contains($path, '.tmp') && !str_contains($path, 'php');
                        };
                        if ($isValidPath($item->cover_file)) $imageUrl = Storage::url($item->cover_file);
                        elseif ($isValidPath($item->thumbnail)) $imageUrl = Storage::url($item->thumbnail);
                        elseif ($isValidPath($item->cover_image)) $imageUrl = Storage::url($item->cover_image);
                    @endphp
                    
                    <x-guest.related-card 
                        :url="route('publications.detail', $item->slug)"
                        :title="$item->title"
                        :summary="$item->summary"
                        :thumbnail="$imageUrl"
                        :badge="$item->category ?? 'Publikasi'"
                        :date="$item->published_at ? \Carbon\Carbon::parse($item->published_at)->format('d M Y') : null"
                        :author="$item->author?->name ?? 'Admin'"
                        fallbackIcon="bi-journal-text"
                    />
                @endforeach
            </div>
        @else
            <!-- Empty State -->
            <div class="bg-[#F8FAFC] rounded-[32px] p-12 text-center flex flex-col justify-center items-center border border-gray-100 shadow-md min-h-[400px]">
                <div class="w-24 h-24 bg-white rounded-full flex items-center justify-center mb-6 shadow-sm">
                    <i class="bi bi-folder-x text-gray-400 text-4xl"></i>
                </div>
                <h4 class="text-gray-900 font-black text-2xl mb-2">Belum Ada Archives</h4>
                <p class="text-gray-500 text-lg">Dokumen publikasi akan segera diperbarui.</p>
            </div>
        @endif
        
    </div>
</section>

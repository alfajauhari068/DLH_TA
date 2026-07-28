@props([
    'url' => request()->url(),
    'title' => 'DLH Tulungagung',
])

<div class="flex flex-wrap items-center gap-2">
    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($url) }}" target="_blank" rel="noopener noreferrer" class="w-10 h-10 flex items-center justify-center rounded-full bg-blue-600 text-white hover:bg-blue-700 hover:-translate-y-1 transition-all shadow-md tooltip-trigger" title="Bagikan ke Facebook">
        <i class="bi bi-facebook"></i>
    </a>
    
    <a href="https://twitter.com/intent/tweet?url={{ urlencode($url) }}&text={{ urlencode($title) }}" target="_blank" rel="noopener noreferrer" class="w-10 h-10 flex items-center justify-center rounded-full bg-slate-800 text-white hover:bg-black hover:-translate-y-1 transition-all shadow-md tooltip-trigger" title="Bagikan ke X / Twitter">
        <i class="bi bi-twitter-x"></i>
    </a>
    
    <a href="https://wa.me/?text={{ urlencode($title . ' ' . $url) }}" target="_blank" rel="noopener noreferrer" class="w-10 h-10 flex items-center justify-center rounded-full bg-green-500 text-white hover:bg-green-600 hover:-translate-y-1 transition-all shadow-md tooltip-trigger" title="Bagikan ke WhatsApp">
        <i class="bi bi-whatsapp"></i>
    </a>
    
    <a href="https://telegram.me/share/url?url={{ urlencode($url) }}&text={{ urlencode($title) }}" target="_blank" rel="noopener noreferrer" class="w-10 h-10 flex items-center justify-center rounded-full bg-sky-500 text-white hover:bg-sky-600 hover:-translate-y-1 transition-all shadow-md tooltip-trigger" title="Bagikan ke Telegram">
        <i class="bi bi-telegram"></i>
    </a>
    
    <button onclick="navigator.clipboard.writeText('{{ $url }}'); alert('Tautan berhasil disalin!');" class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 text-gray-700 hover:bg-gray-200 border border-gray-200 hover:-translate-y-1 transition-all shadow-sm tooltip-trigger" title="Salin Tautan">
        <i class="bi bi-link-45deg text-lg"></i>
    </button>
</div>

<footer class="mt-auto px-6 md:px-8 py-6 border-t border-surface-border">
    <div class="flex flex-col md:flex-row items-center justify-between gap-4">
        <x-ui.text size="sm" class="mb-0 font-medium">© {{ date('Y') }} Dinas Lingkungan Hidup Tulungagung • CMS Portal</x-ui.text>
        <x-ui.text size="sm" class="mb-0 text-muted text-center md:text-right font-medium">
            Laravel v{{ app()->version() }} • PHP v{{ phpversion() }} • Env: <span class="text-success font-semibold">{{ app()->environment() }}</span>
        </x-ui.text>
    </div>
</footer>

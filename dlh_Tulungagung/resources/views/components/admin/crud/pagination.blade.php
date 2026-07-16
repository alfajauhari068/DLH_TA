@if ($items instanceof \Illuminate\Contracts\Pagination\LengthAwarePaginator)
<div class="mt-4">
    {{ $items->links() }}
</div>
@endif

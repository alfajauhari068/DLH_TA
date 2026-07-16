<form method="get" class="mb-4">
    <div class="flex gap-2">
        <input type="search" name="q" value="{{ request('q') }}" placeholder="Search..." class="border rounded px-2 py-1 flex-1" />
        <button class="btn btn-primary">Search</button>
    </div>
</form>

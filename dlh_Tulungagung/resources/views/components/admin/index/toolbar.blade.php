@props([
    'action' => url()->current(),
    'searchPlaceholder' => 'Search...',
    'hasCategory' => false,
    'categories' => [],
    'hasStatus' => false,
    'statuses' => [],
    'hasSort' => true,
    'sorts' => ['newest' => 'Newest', 'oldest' => 'Oldest', 'a-z' => 'Alphabetical A-Z', 'z-a' => 'Alphabetical Z-A'],
    'hasDate' => true,
    'hasExport' => false,
])

<form action="{{ $action }}" method="GET" class="flex flex-col xl:flex-row gap-4 items-center" id="filter-form">
    
    <!-- Search -->
    <div class="flex-1 w-full relative">
        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
            <i class="bi bi-search text-gray-400"></i>
        </div>
        <input type="text" name="search" value="{{ request('search') }}" aria-label="Search" class="block w-full pl-10 pr-3 py-2.5 border border-gray-200 rounded-xl leading-5 bg-gray-50 placeholder-gray-400 focus:outline-none focus:bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 sm:text-sm transition-colors" placeholder="{{ $searchPlaceholder }}" onchange="document.getElementById('filter-form').submit();">
    </div>
    
    <div class="flex flex-wrap sm:flex-nowrap items-center gap-3 w-full xl:w-auto">
        <!-- Category Filter -->
        @if($hasCategory)
        <select name="category" aria-label="Filter by category" class="block w-full sm:w-36 py-2.5 px-3 border border-gray-200 bg-gray-50 rounded-xl text-sm text-gray-600 focus:outline-none focus:bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors" onchange="document.getElementById('filter-form').submit();">
            <option value="">Category</option>
            @foreach($categories as $key => $val)
                <option value="{{ $key }}" @selected(request('category') == $key)>{{ $val }}</option>
            @endforeach
        </select>
        @endif

        <!-- Status Filter -->
        @if($hasStatus)
        <select name="status" aria-label="Filter by status" class="block w-full sm:w-32 py-2.5 px-3 border border-gray-200 bg-gray-50 rounded-xl text-sm text-gray-600 focus:outline-none focus:bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors" onchange="document.getElementById('filter-form').submit();">
            <option value="">Status</option>
            @foreach($statuses as $key => $val)
                <option value="{{ $key }}" @selected(request('status') == $key)>{{ $val }}</option>
            @endforeach
        </select>
        @endif

        <!-- Sort -->
        @if($hasSort)
        <select name="sort" aria-label="Sort order" class="block w-full sm:w-32 py-2.5 px-3 border border-gray-200 bg-gray-50 rounded-xl text-sm text-gray-600 focus:outline-none focus:bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors" onchange="document.getElementById('filter-form').submit();">
            <option value="">Sort By</option>
            @foreach($sorts as $key => $val)
                <option value="{{ $key }}" @selected(request('sort') == $key)>{{ $val }}</option>
            @endforeach
        </select>
        @endif

        <!-- Date Range -->
        @if($hasDate)
        <input type="date" name="date" aria-label="Filter by date" value="{{ request('date') }}" class="block w-full sm:w-40 py-2.5 px-3 border border-gray-200 bg-gray-50 rounded-xl text-sm text-gray-600 focus:outline-none focus:bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors" title="Date Range" onchange="document.getElementById('filter-form').submit();">
        @endif
        
        <!-- Reset & Export -->
        <div class="flex items-center gap-2 w-full sm:w-auto">
            <a href="{{ url()->current() }}" class="flex-1 sm:flex-none inline-flex items-center justify-center px-4 py-2.5 border border-gray-200 text-sm font-medium rounded-xl text-gray-600 bg-white hover:bg-gray-50 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200 transition-colors whitespace-nowrap" aria-label="Reset filters">
                Reset
            </a>
            @if($hasExport)
            <button type="button" class="flex-1 sm:flex-none inline-flex items-center justify-center px-4 py-2.5 border border-transparent text-sm font-medium rounded-xl text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 transition-colors whitespace-nowrap">
                <i class="bi bi-download mr-2"></i> Export
            </button>
            @endif
            <!-- Invisible submit button -->
            <button type="submit" class="hidden">Submit</button>
        </div>
    </div>
</form>

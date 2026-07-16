@props(['class' => ''])

<form method="POST" action="{{ route('logout') }}" class="d-inline">
    @csrf

    <button type="submit" class="{{ $class }}">
        {{ $slot }}
    </button>
</form>

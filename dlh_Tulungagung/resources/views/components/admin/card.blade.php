@props(['title' => null, 'subtitle' => null, 'actions' => null, 'class' => ''])
<div {{ $attributes->merge(['class' => 'card-admin ' . $class]) }}>
    @if($title || $actions)
        <div class="card-header d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between gap-2">
            <div>
                @if($title)
                    <h3 class="mb-1" style="font-size:20px;line-height:1.15">{{ $title }}</h3>
                @endif
                @if($subtitle)
                    <p class="mb-0 text-muted">{{ $subtitle }}</p>
                @endif
            </div>
            @if($actions)
                <div class="d-flex gap-2 align-items-center">{!! $actions !!}</div>
            @endif
        </div>
    @endif
    <div class="card-body">
        {{ $slot }}
    </div>
</div>

@props([
    'withHeader' => false,
    'header' => '',
    'withFooter' => false,
    'footer' => '',
    'subSlotBottom' => '',
])
<div {{ $attributes->merge(['class' => 'card border-0']) }}>
    @if ($withHeader)
        <div class="card-header">
            {{ $header }}
        </div>
    @endif
    <div class="card-body p-4 pt-3">
        <div class="m-sm-3">
            {{ $slot }}
        </div>
    </div>
    {{ $subSlotBottom }}
    @if ($withFooter)
        <div class="card-footer">
            {{ $footer }}
        </div>
    @endif
</div>

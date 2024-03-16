@props([
    'type' => 'button',
])

<div>
    <button {{ $attributes->merge(['class' => 'btn ', 'type' => $type]) }}>
        <div class="d-flex justify-content-center gap-2">
            {{ $slot }}
        </div>
    </button>
</div>

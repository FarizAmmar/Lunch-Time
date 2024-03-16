@props([
    'type' => 'button',
    'label' => 'Replace your button name',
])

<div>
    <button {{ $attributes->merge(['class' => 'btn ', 'type' => $type]) }}>{{ $label }}</button>
</div>

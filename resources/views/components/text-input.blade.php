@props([
    'type' => 'text',
    'placeholder' => 'Replace your placeholder',
    'disabled' => false,
])

<div>
    <input
        {{ $attributes->merge(['type' => $type, 'class' => 'form-control ', 'placeholder' => $placeholder, 'disabled' => $disabled]) }} />
    <div class="invalid-feedback">{{ $message }}</div>
</div>

@props([
    'label' => 'Default Label',
    'labelId' => 'Default',
    'withIcon' => false,
    'icon' => '',
    'placeholder' => 'Type your placeholder',
    'disabled' => false,
    'isValid' => true,
])

<div wire:ignore>
    <label class="form-label" for="{{ $labelId }}">{{ $label }}</label>
    <div class="input-group input-group-merge" style="{{ $isValid ? '' : 'border-color: #ff3e1d;' }}">
        @if ($withIcon)
            <span class="input-group-text">
                {{ $icon }}
            </span>
        @endif
        <textarea
            {{ $attributes->merge(['class' => $isValid ? 'form-control' : 'form-control is-invalid', 'name' => '', 'id' => $labelId, 'placeholder' => $placeholder, 'disabled' => $disabled]) }}></textarea>
    </div>
</div>

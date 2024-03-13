@props([
    'label' => 'Default Label',
    'labelId' => 'Default Label Id',
    'withIcon' => false,
    'icon' => '',
    'type' => 'text',
    'placeholder' => 'Type your placeholder',
    'disabled' => false,
    'isValid' => true,
])

<div x-data>
    <label class="form-label" for="{{ $labelId }}">{{ $label }}</label>
    <div class="input-group input-group-merge">
        @if ($withIcon)
            <span class="input-group-text" style="{{ $isValid ? '' : 'border-color: #ff3e1d;' }}">
                {{ $icon }}
            </span>
        @endif
        <input type="{{ $type }}"
            {{ $attributes->merge(['class' => $isValid ? 'form-control' : 'form-control is-invalid', 'name' => '', 'id' => $labelId, 'placeholder' => $placeholder, 'disabled' => $disabled]) }}
            @if ($type == 'phone') x-mask="+62 999 9999 9999" @endif />
        @if ($type == 'password')
            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
        @endif
    </div>
</div>

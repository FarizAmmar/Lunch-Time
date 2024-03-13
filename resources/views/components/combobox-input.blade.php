@props([
    'label' => 'Default Label',
    'labelId' => 'Default Label Id',
    'placeholder' => 'Type your placeholder',
    'disabled' => false,
    'isValid' => true,
])

<div>
    <label class="form-label" for="{{ $labelId }}">{{ $label }}</label>
    <div class="input-group input-group-merge">
        <select
            {{ $attributes->merge(['class' => $isValid ? 'form-select' : 'form-select is-invalid', 'name' => '', 'id' => $labelId, 'disabled' => $disabled]) }}>
            <option value="" selected hidden>{{ $placeholder }}</option>
            {{ $slot }}
        </select>
    </div>
</div>

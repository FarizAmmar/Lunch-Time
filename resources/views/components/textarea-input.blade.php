@props([
    'type' => 'text',
    'placeholder' => 'Replace your placeholder',
    'disabled' => false,
    'withIcon' => false,
    'withLabel' => false,
    'label' => 'Replace your label',
    'icon' => '',
])

<div x-data="{ isShow: false }">
    <div class="row">
        <div class="col-6">
            @if ($withLabel)
                <label class="form-label">
                    {{ $label }}
                </label>
            @endif
        </div>
    </div>
    <div class="position-relative">
        @if ($withIcon)
            <div class="position-absolute translate-middle start-0 top-0 ms-4 mt-3 pt-1 opacity-75">
                {{ $icon }}
            </div>
        @endif
        <textarea x-bind:type="isShow ? 'text' : '{{ $type }}'"
            {{ $attributes->merge(['class' => $withIcon ? 'form-control ps-5' : 'form-control', 'placeholder' => $placeholder, 'rows' => '2', 'cols' => '10', 'disabled' => $disabled]) }}></textarea>
    </div>
    <div class="row">
        @if ($type == 'password')
            <div class="col-12 pe-3 text-end">
                <a class="text-primary text-underline" role="button" x-show="!isShow"
                    x-on:click="isShow = !isShow">Show</a>
                <a class="text-primary text-underline" role="button" x-show="isShow"
                    x-on:click="isShow = !isShow">Hide</a>
            </div>
        @endif
    </div>
    <div class="invalid-feedback">{{ $message }}</div>
</div>

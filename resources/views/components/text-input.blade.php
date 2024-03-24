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
        <div class="col-12">
            @if ($withLabel)
                <label class="form-label">
                    {{ $label }}
                </label>
            @endif
        </div>
    </div>
    <div class="position-relative">
        @if ($withIcon)
            <div class="position-absolute top-50 translate-middle start-0 ms-4 opacity-75">
                {{ $icon }}
            </div>
        @endif
        <input x-bind:type="isShow ? 'text' : '{{ $type }}'"
            {{ $attributes->merge(['class' => $withIcon ? 'form-control ps-5' : 'form-control', 'placeholder' => $placeholder, 'disabled' => $disabled]) }}
            @if ($type == 'phone') x-mask="+62 999-9999-9999" @endif />
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


<script>
    function phoneNumber(input) {
        return input.startsWith('0') || input.startsWith('+62') ?
            '999-9999-9999' :
            '999-9999-9999'
    }
</script>

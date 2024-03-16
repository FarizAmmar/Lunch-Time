<div>
    <div {{ $attributes->merge(['class' => 'card border-0 shadow']) }}>
        <div class="card-body">
            <div class="m-sm-3">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>

<div class="col mb-3">
    <div class="card h-100 @isset($class) {{ $class }} @endisset">
        <div class="row card-body">
            {{ $slot }}
        </div>
    </div>
</div>
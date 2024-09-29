<div class="mb-3">
    @if ($label)
        <label class="form-label">{{ $label }}</label>
    @endif
    {{ $slot }}
</div>
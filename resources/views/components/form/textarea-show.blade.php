<div class="mb-3">
    @if ($label)
        <label class="form-label">{{ $label }}</label>
    @endif
    <textarea class="form-control" rows="{{ $rows }}" readonly>{{ $value }}</textarea>
</div>
<div class="mb-3">
    @if ($label)
        <label class="form-label">{{ $label }}</label>
    @endif
    <input type="text" value="{{ $formattedValue }}" class="{{ $class }}" readonly/>
</div>
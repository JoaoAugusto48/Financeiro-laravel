<div class="mb-3">
    @if ($label)
        <label class="form-label">{{ $label }}</label>
    @endif
    <input type="text" value="{{ $value }}" class="{{ $class }}" readonly/>
</div>
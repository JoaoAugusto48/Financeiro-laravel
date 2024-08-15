<div class="mb-3">
    @if ($label)
        <label class="form-label">{{ $label }}</label>
    @endif
    <div class="input-group">
        <span class="input-group-text">{{ $group }}</span>
        <input type="text" value="{{ $value }}" class="{{ $class }}" readonly/>
    </div>
</div>
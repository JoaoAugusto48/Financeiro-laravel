<div class="mb-3">
    @if ($label)
        <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    @endif
    <textarea name="{{ $name }}" id="{{ $name }}" class="form-control" rows="{{ $rows }}" placeholder="{{ $placeholder ?? '' }}">{{ old($name, $value) }}</textarea>
    @error($name)
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
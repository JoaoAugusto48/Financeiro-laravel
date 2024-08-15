<div>
    <div class="form-check mb-3">
        <input type="checkbox" name="{{ $name }}" id="{{ $name }}" class="form-check-input" value="{{ $value }}"
               {{ old($name, $checked) ? 'checked' : '' }}>
        <label class="form-check-label" for="{{ $name }}">{{ $label }}</label>
        @error($name)
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
</div>
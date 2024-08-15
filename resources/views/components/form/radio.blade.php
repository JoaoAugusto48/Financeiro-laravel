<div>
    @if ($label)
        <label class="form-label">{{ $label }}</label>
    @endif
    @foreach ($options as $key => $option)
        <div class="form-check">
            <input type="radio" name="{{ $name }}" id="{{ $name . '_' . $key }}" class="form-check-input"
                   value="{{ $key }}" {{ old($name, $value) == $key ? 'checked' : '' }}>
            <label class="form-check-label" for="{{ $name . '_' . $key }}">{{ $option }}</label>
        </div>
    @endforeach
    @error($name)
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
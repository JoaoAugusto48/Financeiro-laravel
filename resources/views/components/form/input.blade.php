<div class="mb-3">
    @if ($label)
        <label for="{{ $name }}" class="form-label">{{ $label }}@if($required)*@endif</label>
    @endif
    <input type="{{ $type }}" 
            name="{{ $name }}" 
            id="{{ $name }}" 
            class="form-control"
            value="{{ old($name, $value) }}" 
            placeholder="{{ $placeholder }}"
            @if($required) required @endif 
            />
    @error($name)
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div>
    @if ($label)
        <label for="{{ $name }}" class="form-label">{{ $label }}@if($required)*@endif</label>
    @endif
    <div class="input-group">
        <span class="input-group-text">{{ $group }}</span>
        <input type="{{ $type }}" 
                name="{{ $name }}" 
                id="{{ $name }}" 
                class="form-control"
                value="{{ old($name, $value) }}" 
                placeholder="{{ $placeholder }}"
                @if($required) required @endif 
                {{ $attributes }}>
    </div>
    @error($name)
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
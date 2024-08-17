<div class="mb-3">
    @if ($label)
        <label for="{{ $name }}" class="form-label">{{ $label }}@if($required)*@endif</label>
    @endif
    <input type="date" 
            name="{{ $name }}" 
            id="{{ $name }}" 
            class="form-control"
            value="{{ old($name, $formattedValue) }}"
            @if ($max) max="{{ $formattedMax }}" @endif
            @if($required) required @endif 
            {{ $attributes }}>
    @error($name)
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
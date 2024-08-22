<div class="mb-3">
    @if ($label)
        <label for="{{ $name }}" class="form-label">{{ $label }}@if($required)*@endif</label>
    @endif
    <select class="form-select" 
            name="{{ $name }}" 
            id="{{ $name }}" 
            {{ $required ? 'required' : '' }}
            aria-label="Select">
        <option value="" {{ $selected || old($name) ? '' : 'selected' }}>Open this select menu</option>
        {{ $slot }}
    </select>
    @error($name)
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
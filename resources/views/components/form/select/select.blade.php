<div class="mb-3">
    @if ($label)
        <label for="{{ $name }}" class="form-label">{{ $label }}@if($required)*@endif</label>
    @endif
    <select class="form-select" name="{{ $name }}" id="{{ $name }}" aria-label="Select" @if($required) required @endif {{ $attributes }}>
        <option selected>Open this select menu</option>
        {{ $slot }}
    </select>
    @error($name)
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
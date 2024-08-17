<div class="mb-3">
    @if ($label)
        <label class="form-label">{{ $label }}@if($required)*@endif</label>
    @endif
    {{ $slot }}
    @error($name)
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
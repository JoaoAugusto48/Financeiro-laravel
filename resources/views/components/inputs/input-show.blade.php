<input type="text" 
    class="form-control"
    @isset($value) value="{{ $value }}" @endisset 
    @empty($value) value="" @endempty
    disabled readonly
>
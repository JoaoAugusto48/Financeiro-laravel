<textarea class="form-control" 
    @isset($rows) rows="{{ $rows }}" @endisset
    @empty($rows) rows="3" @endempty
    disabled readonly
>{{ $slot }}</textarea>
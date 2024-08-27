@if ($isLink != 'false')
    <a href="{{ $url ?? '' }}" class="btn btn-{{ $class }}">
        {{ $label }}
    </a>
@else
    <button type="{{ $type }}" class="btn btn-{{ $class }}">
        {{ $label }}
    </button>
@endif
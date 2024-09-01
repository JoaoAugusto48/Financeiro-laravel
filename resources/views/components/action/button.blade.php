@if ($isLink != 'false')
    <a href="{{ $url ?? '' }}" class="btn btn-{{ $class }}" {{ $attributes }}>
        {{ $label }}
    </a>
@else
    <button type="{{ $type }}" class="btn btn-{{ $class }}" {{ $attributes }}>
        {{ $label }}
    </button>
@endif
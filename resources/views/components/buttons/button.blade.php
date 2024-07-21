<a @isset($href) href="{{ $href }}" @endisset class="{{ $class }}">
    {{ $slot }}
</a>

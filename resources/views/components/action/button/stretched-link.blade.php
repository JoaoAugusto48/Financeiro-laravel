<x-action.button is-link="true" class="{{ $class }} stretched-link" :$url>
    <x-slot:label>
        @if ($icon)
            {{ $icon }}
        @else
            <i class="bi bi-file-bar-graph"></i>             
        @endif
        {{ $label }}
    </x-slot:label>
</x-action.button>
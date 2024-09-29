{{-- <form action="{{ $url }}" method="POST" class="d-inline" onsubmit="return confirm('{{ $confirmMessage ?? 'Are you sure?' }}');">
    @csrf
    @method('DELETE')
    <x-action.button type="{{ $type }}" class="{{ $class }}" is-link="{{ $isLink }}">
        <x-slot:label>
            <i class="bi bi-trash3"></i> {{ $label }}
        </x-slot:label>
    </x-action.button>
</form> --}}
<x-action.button class="{{ $class }}" type="button" is-link="false" data-bs-toggle="modal" data-bs-target="#delete{{ $object->id }}">
    <x-slot:label>
        <i class="bi bi-trash3"></i> {{ $label }}
    </x-slot:label>
</x-action.button>

@push('modals')
    @if ($modalComponent)
        <x-dynamic-component :component="$modalComponent" 
            id="delete{{ $object->id }}" 
            :object="$object"/>
    @endif
@endpush

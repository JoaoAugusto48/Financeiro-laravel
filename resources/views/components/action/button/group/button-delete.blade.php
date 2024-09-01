<x-action.button class="{{ $class }}" type="button" is-link="false" data-bs-toggle="modal" data-bs-target="#delete{{ $object->id }}">
    <x-slot:label>
        <i class="bi bi-trash3"></i> {{ $label }}
    </x-slot:label>
</x-action.button>

@push('modals')
@if ($typeObject == 'allowance')
    <x-modal.delete.allowance-modal 
        id="delete{{ $object->id }}" 
        :allowance="$object"/>
@else
    
@endif
@endpush

<x-modal.modal id="{{ $id }}">
    <x-slot:title>Tem certeza que deseja remover "{{ $allowance->title }}"?</x-slot:title>
    <x-slot:body>
        <div class="row">
            <div class="col">
                <p class="text-body">Acc: {{ $allowance->account->accountHolder->name }}</p>
            </div>
            <div class="col">
                <p class="text-body">
                    Value: <x-helper.currency-text value="{{ $allowance->value }}"/>    
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="text-body">Related acc: {{ $allowance->relatedHolder?->name ?? '-' }}</p>
            </div>
            <div class="col">
                <p class="text-body">Type: {{ $allowance->kindTransaction }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="text-body">Description: {{ $allowance->description ?? '-' }}</p>
            </div>
        </div>
    </x-slot:body>
    <x-slot:buttons>
        <form action="{{ route('allowances.destroy', $allowance->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <x-action.button label="Remove" is-link="false" type="submit" class="danger"/>
        </form>
    </x-slot:buttons>
</x-modal.modal>
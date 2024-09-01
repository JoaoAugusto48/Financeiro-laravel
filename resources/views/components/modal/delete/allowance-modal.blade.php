<x-modal.modal id="{{ $id }}">
    <x-slot:title>Tem certeza que deseja remover "{{ $allowance->title }}"?</x-slot:title>
    <x-slot:body>
        <p class="text-body">Conta: {{ $allowance->account->accountHolder->name }}</p>
        <p class="text-body">
            Valor: <x-helper.currency-text value="{{ $allowance->value }}"/>    
        </p>
        <p class="text-body">Conta Relacionada: {{ $allowance->relatedHolder?->name }}</p>
        <p class="text-body">Descrição: {{ $allowance->description }}</p>
        <p class="text-body">Tipo: {{ $allowance->kindTransaction }}</p>
    </x-slot:body>
    <x-slot:buttons>
        <form action="{{ route('allowances.destroy', $allowance->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <x-action.button label="Remove" is-link="false" type="submit" class="danger"/>
        </form>
    </x-slot:buttons>
</x-modal.modal>
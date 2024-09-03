<x-modal.modal id="{{ $id }}">
    <x-slot:title>Tem certeza que deseja remover "{ }"?</x-slot:title>
    <x-slot:body>
        <p class="text-body">Value | KindTransaction | Description | Account | RelatedHolder</p>
        <p class="text-body">Conta: {}</p>
        <p class="text-body">
            Valor: <x-helper.currency-text value="{{ $transaction->value }}"/>    
        </p>
        <p class="text-body">Conta Relacionada: {}</p>
        <p class="text-body">Descrição: {}</p>
        <p class="text-body">Tipo: {}</p>
    </x-slot:body>
    <x-slot:buttons>
        <form action="{{ route('transactions.destroy', $transaction->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <x-action.button label="Remove" is-link="false" type="submit" class="danger"/>
        </form>
    </x-slot:buttons>
</x-modal.modal>
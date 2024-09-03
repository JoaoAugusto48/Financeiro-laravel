<x-modal.modal id="{{ $id }}">
    <x-slot:title>Tem certeza que deseja remover "{{ $bank->name }}"?</x-slot:title>
    <x-slot:body>
        <p class="text-body">Number | Name | Abbreviation | Accounts</p>
        <p class="text-body">Conta: {}</p>
        <p class="text-body">
            {{-- Valor: <x-helper.currency-text value="{}"/>     --}}
        </p>
        <p class="text-body">Conta Relacionada: {}</p>
        <p class="text-body">Descrição: {}</p>
        <p class="text-body">Tipo: {}</p>
    </x-slot:body>
    <x-slot:buttons>
        <form action="{{ route('banks.destroy', $bank->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <x-action.button label="Remove" is-link="false" type="submit" class="danger"/>
        </form>
    </x-slot:buttons>
</x-modal.modal>
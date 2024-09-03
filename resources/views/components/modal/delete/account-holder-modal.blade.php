<x-modal.modal id="{{ $id }}">
    <x-slot:title>Tem certeza que deseja remover "{{ $accountHolder->name }}"?</x-slot:title>
    <x-slot:body>
        <p class="text-body">Name | Accounts | Transactions | Allowances</p>
        <p class="text-body">Possui {{ $accountHolder->accounts->count() }} Accounts relacionadas</p>
        <p class="text-body">Possui {{ $accountHolder->transactions->count() }} Transactions relacionadas</p>
        <p class="text-body">Possui {{ $accountHolder->allowances->count() }} Allowances relacionadas</p>
    </x-slot:body>
    <x-slot:buttons>
        <form action="{{ route('holders.destroy', $accountHolder->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <x-action.button label="Remove" is-link="false" type="submit" class="danger"/>
        </form>
    </x-slot:buttons>
</x-modal.modal>
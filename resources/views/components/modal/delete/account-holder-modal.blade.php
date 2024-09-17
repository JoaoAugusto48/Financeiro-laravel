<x-modal.modal id="{{ $id }}">
    <x-slot:title>Tem certeza que deseja remover "{{ $accountHolder->name }}"?</x-slot:title>
    <x-slot:body>
        <div class="row">
            <div class="col">
                <p class="text-body">Name: {{ $accountHolder->name }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="text-body">Accounts: {{ $accountHolder->accounts->count() }}</p>
            </div>
            <div class="col">
                <p class="text-body">Transactions: {{ $accountHolder->transactions->count() }}</p>
            </div>
            <div class="col">
                <p class="text-body">Allowances: {{ $accountHolder->allowances->count() }}</p>
            </div>
        </div>
    </x-slot:body>
    <x-slot:buttons>
        <form action="{{ route('holders.destroy', $accountHolder->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <x-action.button label="Remove" is-link="false" type="submit" class="danger"/>
        </form>
    </x-slot:buttons>
</x-modal.modal>
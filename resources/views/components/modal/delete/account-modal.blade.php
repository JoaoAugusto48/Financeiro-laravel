<x-modal.modal id="{{ $id }}">
    <x-slot:title>Tem certeza que deseja remover "{{ $account->accountNumber }}"?</x-slot:title>
    <x-slot:body>
        <p class="text-body">accountNumber | Bank | Account Holder | balance</p>

        <div class="row">
            <div class="col">
                <p class="text-body">Acc. number: {{ $account->accountNumber }}</p>
            </div>
            <div class="col">
                <p class="text-body">Acc. holder: {{ $account->accountHolder->name }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="text-body">
                    Balance: <x-helper.currency-text value="{{ $account->balance }}"/>
                </p>    
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="text-body">Bank: "<x-helper.text.bank :bank="$account->bank"/>"</p>
            </div>
        </div>
    </x-slot:body>
    <x-slot:buttons>
        <form action="{{ route('accounts.destroy', $account->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <x-action.button label="Remove" is-link="false" type="submit" class="danger"/>
        </form>
    </x-slot:buttons>
</x-modal.modal>
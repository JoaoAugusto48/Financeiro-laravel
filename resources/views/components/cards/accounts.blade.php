<x-cards.card>
    <h5 class="card-title">{{ $account->bank->name }} - {{ $account->accountNumber }}</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">{{ $account->accountHolder->name }}</h6>
    <p class="card-text">R$ {{ $account->balance }}</p>
    <div class="col align-self-end">
        <div class="btn-group" role="group" aria-label="Ativities">
            <x-buttons.table.show href="{{ route('accounts.show', $account->id) }}" />
            <x-buttons.table.edit href="{{ route('accounts.edit', $account->id) }}" />
            <x-buttons.table.delete action="{{ route('accounts.destroy', $account->id) }}" />
        </div>
    </div>
</x-cards.card>

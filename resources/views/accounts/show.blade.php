<x-layout page-name="Account">
    <x-slot:title>
        Atualizar '{{ $account->accountNumber }} - {{ $account->accountHolder->name }}'
    </x-slot:title>

    @if ($transactions->count() > 0)
    <p class="d-inline-flex gap-1">
        <a class="btn btn-outline-primary" 
            data-bs-toggle="collapse" 
            href="#information" 
            role="button"
            aria-expanded="false" aria-controls="information">
            Information
        </a>
        <button class="btn btn-outline-primary" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#transaction"
                aria-expanded="false" aria-controls="transaction">
            Transactions
        </button>
        <button class="btn btn-outline-primary" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target=".multi-collapse"
                aria-expanded="false" 
                aria-controls="data transaction">
            Alterar Visualização
        </button>
    </p>
    @endif

    <div class="row collapse multi-collapse show" id="information">
    <x-accounts.show 
        :go-back="route('accounts.index')" 
        :$account />
    </div>

    @if ($transactions->count() > 0)
    <div class="collapse multi-collapse show" id="transaction">
        <p class="h3">Transactions</p>
        <div class="row row-cols-4">
            @foreach ($transactions as $transaction)
                <x-cards.transaction-card :transaction="$transaction" />
            @endforeach
        </div>
    </div>
    @endif
    
</x-layout>

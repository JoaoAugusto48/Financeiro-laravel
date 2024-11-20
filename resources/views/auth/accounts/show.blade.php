<x-layout page-name="Account">
    <x-slot:title>
        <x-helper.text.account :$account/>
    </x-slot:title>

    <div class="row">
        <div class="col">
            <div class="hstack gap-2">
                <x-action.button.back :url="route('accounts.index')"/>
                <div class="vr"></div>
                <x-action.button.create :url="route('accounts.create')" />
                <x-action.button.edit :url="route('accounts.edit', $account)" />
                <x-action.button.delete :action="route('accounts.destroy', $account->id)" :object="$account" />
            </div>
        </div>
    </div>

    @if ($transactions->count() > 0)
        <p class="d-inline-flex gap-1 mt-2">
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
        <x-accounts.show :$account />
    </div>

    @if ($transactions->count() > 0)
    <div class="collapse multi-collapse show" id="transaction">
        <p class="h3">Transactions</p>
        <div class="row row-cols-4">
            @foreach ($transactions as $transaction)
                <x-cards.transaction-card :$transaction />
            @endforeach
        </div>
    </div>
    @endif
    
</x-layout>

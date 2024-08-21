<x-layout title="Transaction" pageName="Transaction">
        
    <x-alerts.danger :error="$error"/>
    <x-alerts.success :success="$success"/>

    <div class="row mb-2">
        <div class="col">
            <x-action.button.button-create url="{{ route('transactions.create') }}"/>
        </div>
    </div>

    <div class="row row-cols-4">
        @foreach ($transactions as $transaction)
            <x-cards.transaction-card 
                :transaction="$transaction"
                kindDeposit="{{ $kindTransactions['deposit'] }}"    
            />
        @endforeach
    </div>
</x-layout>

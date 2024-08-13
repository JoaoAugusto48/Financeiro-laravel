<x-layout title="Atualizar Transaction" pageName="Transaction">
    <x-transactions.form action="{{ route('transactions.update', $transaction->id) }}"
                goBack="{{ route('transactions.index') }}"
                :transaction="$transaction"
                :transactionsEnum="$transactionsEnum"
                :accounts="$accounts"
                :relatedAccounts="$relatedAccounts"
                :allowances="$allowances"
                :today="$today"/>
</x-layout>

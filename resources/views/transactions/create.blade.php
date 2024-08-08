<x-layout title="Nova Transação" pageName="Transaction">
    <x-transactions.form action="{{ route('transactions.store') }}"
                goBack="{{ route('transactions.index') }}"
                :transactionsEnum="$transactionsEnum"
                :accountHolders="$accountHolders"
                :relatedAccounts="$relatedAccounts"/>
</x-layout>

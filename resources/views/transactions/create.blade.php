<x-layout title="Nova Transação" pageName="Transaction">
    <x-transactions.form action="{{ route('transactions.store') }}"
                goBack="{{ route('transactions.index') }}"
                :transactionsEnum="$transactionsEnum"
                :accounts="$accounts"
                :relatedAccounts="$relatedAccounts"
                :allowances="$allowances"
                :today="$today"/>
</x-layout>

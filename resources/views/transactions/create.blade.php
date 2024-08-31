<x-layout title="Nova Transação" page-name="Transaction">
    <x-transactions.form action="{{ route('transactions.store') }}"
                :go-back="route('transactions.index')"
                :transactions-enum="$transactionsEnum"
                :accounts="$accounts"
                :related-accounts="$relatedAccounts"
                :allowances="$allowances"
                :today="$today"/>
</x-layout>

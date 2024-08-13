<x-layout title="{{ $transaction->value }} - {{ $transaction->account->accountHolder->name }}" pageName="Transaction">
    <x-transactions.show 
        :goBack="route('transactions.index')" 
        :transaction="$transaction"/>
</x-layout>
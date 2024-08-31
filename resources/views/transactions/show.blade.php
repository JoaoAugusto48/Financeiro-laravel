<x-layout page-name="Transaction">
    <x-slot:title>
        <x-helper.currency-text :value="$transaction->value"/> - {{ $transaction->account->accountHolder->name }}
    </x-slot:title>
    
    <x-transactions.show 
        :go-back="route('transactions.index')" 
        :transaction="$transaction"/>
</x-layout>
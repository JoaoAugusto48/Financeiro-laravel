<x-layout title="{{ $account->accountNumber }} - {{ $account->accountHolder->name }}">
    <x-accounts.show 
        :goBack="route('accounts.index')" 
        :account="$account"/>
</x-layout>
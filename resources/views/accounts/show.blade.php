<x-layout title="{{ $account->accountNumber }} - {{ $account->accountHolder->name }}" pageName="Account">
    <x-accounts.show 
        :goBack="route('accounts.index')" 
        :account="$account"/>
</x-layout>
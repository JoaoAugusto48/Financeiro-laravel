<x-layout page-name="Account">
    <x-slot:title>
        Atualizar '{{ $account->accountNumber }} - {{ $account->accountHolder->name }}'
    </x-slot:title>
    
    <x-accounts.form action="{{ route('accounts.update', $account) }}"
        :go-back="route('accounts.index')"
        :account="$account"
        :banks="$banks"
        :accountHolders="$accountHolders"/>
</x-layout>
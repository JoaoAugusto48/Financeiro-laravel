<x-layout page-name="Account">
    <x-slot:title>
        Atualizar '{{ $account->accountNumber }} - {{ $account->accountHolder->name }}'
    </x-slot:title>

    <x-accounts.show 
        :goBack="route('accounts.index')" 
        :account="$account"/>
</x-layout>
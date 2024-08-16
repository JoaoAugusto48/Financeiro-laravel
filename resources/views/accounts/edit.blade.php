<x-layout title="Atualizar '{{ $account->accountNumber }} - {{ $account->accountHolder->name }}'" pageName="Account">
    <x-accounts.form action="{{ route('accounts.update', $account) }}"
        goBack="{{ route('accounts.index') }}"
        :account="$account"
        :banks="$banks"
        :accountHolders="$accountHolders"/>
</x-layout>
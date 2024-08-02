<x-layout title="Atualizar '{{ $account->accountNumber }} - {{ $account->accountHolder->name }}'">
    <x-accounts.form action="{{ route('accounts.update', $account) }}"
        goBack="{{ route('accounts.index') }}"
        :account="$account"/>
</x-layout>
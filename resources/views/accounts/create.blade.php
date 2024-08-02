<x-layout title="Nova Conta" pageName="Account">
    <x-accounts.form action="{{ route('accounts.store') }}"
                goBack="{{ route('accounts.index') }}"
                :banks="$banks"
                :accountHolders="$accountHolders"/>
</x-layout>
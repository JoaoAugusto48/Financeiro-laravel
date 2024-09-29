<x-layout title="Nova Conta" page-name="Account">
    
    <x-accounts.form action="{{ route('accounts.store') }}"
                :go-back="route('accounts.index')"
                :banks="$banks"
                :accountHolders="$accountHolders"/>
</x-layout>
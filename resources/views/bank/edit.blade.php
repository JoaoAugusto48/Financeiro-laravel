<x-layout title="{{ $bank->name }}">
    <x-bank.form
        :action="route('banks.update', $bank->id)" 
        :bank="$bank"
        :goBack="route('banks.index')" />
</x-layout>
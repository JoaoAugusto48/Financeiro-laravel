<x-layout title="{{ $bank->name }}">
    <x-bank.show 
        :goBack="route('banks.index')" 
        :bank="$bank"/>
</x-layout>
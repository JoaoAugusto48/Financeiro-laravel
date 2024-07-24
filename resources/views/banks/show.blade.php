<x-layout title="{{ $bank->name }}">
    <x-banks.show 
        :goBack="route('banks.index')" 
        :bank="$bank"/>
</x-layout>
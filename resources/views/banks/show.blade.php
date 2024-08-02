<x-layout title="{{ $bank->name }}" pageName="Bank">
    <x-banks.show 
        :goBack="route('banks.index')" 
        :bank="$bank"/>
</x-layout>
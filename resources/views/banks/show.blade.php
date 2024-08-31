<x-layout title="{{ $bank->name }}" page-name="Bank">
    <x-banks.show 
        :go-back="route('banks.index')" 
        :bank="$bank"/>
</x-layout>
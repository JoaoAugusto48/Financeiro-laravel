<x-layout title="Atualizar '{{ $bank->name }}'">
    <x-holders.form
        :action="route('banks.update', $bank->id)" 
        :bank="$bank"
        :goBack="route('banks.index')" />
</x-layout>
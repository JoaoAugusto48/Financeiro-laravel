<x-layout title="Atualizar '{{ $bank->name }}'" pageName="Bank">
    <x-banks.form
        :action="route('banks.update', $bank->id)" 
        :bank="$bank"
        :goBack="route('banks.index')" />
</x-layout>
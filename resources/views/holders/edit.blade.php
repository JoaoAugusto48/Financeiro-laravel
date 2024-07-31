<x-layout title="Atualizar '{{ $accountHolder->name }}'">
    <x-holders.form 
        :action="route('holders.update', $accountHolder->id)"
        :accountHolder="$accountHolder"
        :goBack="route('holders.index')"/>
</x-layout>
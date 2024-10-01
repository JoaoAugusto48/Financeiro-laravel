<x-layout page-name="Holder">
    <x-slot:title>
        Atualizar '{{ $accountHolder->name }}'
    </x-slot:title>
    
    <x-holders.form 
        :action="route('holders.update', $accountHolder->id)"
        :$accountHolder
        :go-back="route('holders.show', $accountHolder)"/>
</x-layout>
<x-layout page-name="Holder">
    <x-slot:title>
        Atualizar '{{ $accountHolder->name }}'
    </x-slot:title>
    
    <x-holders.form 
        :action="route('holders.update', $accountHolder->id)"
        :account-holder="$accountHolder"
        :goBack="route('holders.index')"/>
</x-layout>
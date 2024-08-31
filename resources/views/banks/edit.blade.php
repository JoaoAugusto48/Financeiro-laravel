<x-layout page-name="Bank">
    <x-slot:title>
        Atualizar '{{ $bank->name }}'
    </x-slot:title>

    <x-banks.form
        :action="route('banks.update', $bank->id)" 
        :bank="$bank"
        :go-back="route('banks.index')" />
</x-layout>
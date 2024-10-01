<x-layout page-name="Allowance">
    <x-slot:title>
        Atualizar '{{ $allowance->title }}'
    </x-slot:title>

    <x-allowances.form action="{{ route('allowances.update', $allowance->id) }}" 
        go-back="{{ route('allowances.show', $allowance) }}"
        :$allowance :$transactions 
        :$accounts :$relatedAccounts/>
</x-layout>
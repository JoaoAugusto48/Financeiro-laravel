<x-layout title="Nova Mensalidade">
    <x-allowances.form action="{{ route('allowances.store') }}" 
                goBack="{{ route('allowances.index') }}"
                :transactions="$transactions"
                :accountHolders="$accountHolders"/>
</x-layout>
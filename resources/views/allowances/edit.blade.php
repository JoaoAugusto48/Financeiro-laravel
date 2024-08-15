<x-layout title="Atualizar '{{ $allowance->title }}'" pageName="Allowance">
    <x-allowances.form action="{{ route('allowances.update', $allowance->id) }}" 
                goBack="{{ route('allowances.index') }}"
                :allowance="$allowance"
                :transactions="$transactions"
                :accounts="$accounts"
                :relatedAccounts="$relatedAccounts"/>
</x-layout>
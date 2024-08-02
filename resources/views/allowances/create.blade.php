<x-layout title="Nova Mensalidade" pageName="Allowance">
    <x-allowances.form action="{{ route('allowances.store') }}" 
                goBack="{{ route('allowances.index') }}"
                :transactions="$transactions"
                :accountHolders="$accountHolders"
                :relatedAccounts="$relatedAccounts"/>
</x-layout>
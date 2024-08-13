<x-layout title="Nova Mensalidade" pageName="Allowance">
    <x-allowances.form action="{{ route('allowances.store') }}" 
                goBack="{{ route('allowances.index') }}"
                :transactions="$transactions"
                :accounts="$accounts"
                :relatedAccounts="$relatedAccounts"/>
</x-layout>
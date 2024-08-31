<x-layout title="Nova Mensalidade" page-name="Allowance">
    <x-allowances.form action="{{ route('allowances.store') }}" 
                go-back="{{ route('allowances.index') }}"
                :transactions="$transactions"
                :accounts="$accounts"
                :relatedAccounts="$relatedAccounts"/>
</x-layout>
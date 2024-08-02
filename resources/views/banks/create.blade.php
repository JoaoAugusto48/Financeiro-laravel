<x-layout title="Novo Banco" pageName="Bank">
    <x-banks.form action="{{ route('banks.store') }}"
                goBack="{{ route('banks.index') }}"/>
</x-layout>

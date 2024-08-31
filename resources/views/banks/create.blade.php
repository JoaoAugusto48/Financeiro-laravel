<x-layout title="Novo Banco" page-name="Bank">
    <x-banks.form action="{{ route('banks.store') }}"
                go-back="{{ route('banks.index') }}"/>
</x-layout>

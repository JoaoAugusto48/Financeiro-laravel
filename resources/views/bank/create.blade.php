<x-layout title="Novo Banco">
    <x-bank.form action="{{ route('banks.store') }}"
                goBack="{{ route('banks.index') }}"/>
</x-layout>

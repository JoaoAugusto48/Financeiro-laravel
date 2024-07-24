<x-layout title="Novo Banco">
    <x-banks.form action="{{ route('banks.store') }}"
                goBack="{{ route('banks.index') }}"/>
</x-layout>

<x-layout title="Nova Mensalidade">
    <x-holders.form action="{{ route('holders.store') }}"
                    goBack="{{ route('holders.index') }}"/>
</x-layout>
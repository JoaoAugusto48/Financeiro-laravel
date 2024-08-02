<x-layout title="Nova Mensalidade" pageName="Holder">
    <x-holders.form action="{{ route('holders.store') }}"
                    goBack="{{ route('holders.index') }}"/>
</x-layout>
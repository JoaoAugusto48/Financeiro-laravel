<x-layout title="Novo Holder" page-name="Holder">
    <x-holders.form action="{{ route('holders.store') }}"
                    go-back="{{ route('holders.index') }}"/>
</x-layout>
<x-layout title="{{ $allowance->title }}" page-name="Allowance">
    <x-allowances.show 
        go-back="{{ route('allowances.index') }}"
        :allowance="$allowance"/>
</x-layout>
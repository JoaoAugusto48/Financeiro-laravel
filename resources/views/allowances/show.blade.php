<x-layout title="{{ $allowance->title }}" pageName="Allowance">
    <x-allowances.show 
        goBack="{{ route('allowances.index') }}"
        :allowance="$allowance"/>
</x-layout>
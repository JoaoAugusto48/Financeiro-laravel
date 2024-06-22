<x-layout title="Bank">
    @foreach ($banks as $bank)
        <p class="m-0">{{ $bank->number }} {{ $bank->name }} - {{ $bank->abbreviation }}</p>
    @endforeach
</x-layout>

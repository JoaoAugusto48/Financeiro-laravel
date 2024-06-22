<x-layout title="Allowance">
    @foreach ($allowances as $allowance)
        <p class="m-0">{{ $allowance->title }} - {{ $allowance->value }} - {{  $allowance->kindTransaction }} - {{ $allowance->account->accountHolder->name }}</p>
    @endforeach
</x-layout>

<x-layout title="Account">
    @foreach ($accounts as $account)
        <p class="m-0">{{ $account->accountNumber }} {{ $account->accountHolder->name }} - {{ $account->balance }} - {{ $account->bank->name }}</p>
    @endforeach
</x-layout>

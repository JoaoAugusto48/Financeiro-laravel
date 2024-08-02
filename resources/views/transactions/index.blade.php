<x-layout title="Transaction" pageName="Transaction">
    @foreach ($transactions as $transaction)
        <p class="m-0">{{ $transaction->account->accountHolder->name }} {{ $transaction->value }} - {{ $transaction->kindTransaction }} - {{ $transaction->descriptionReason }}</p>
    @endforeach
</x-layout>

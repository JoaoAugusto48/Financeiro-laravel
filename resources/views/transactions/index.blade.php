<x-layout title="Transaction" page-name="Transaction">
        
    <x-helper.alert :$messages/>

    <div class="row mb-2">
        <div class="col">
            <x-action.button.create url="{{ route('transactions.create') }}"/>
        </div>
    </div>

    <div class="row">
        {{ $transactions->links() }}
    </div>

    <div class="row row-cols-4">
        @foreach ($transactions as $transaction)
            <x-cards.transaction-card :$transaction/>
        @endforeach
    </div>
</x-layout>

<x-layout page-name="Transaction">
    <x-slot:title>
        <x-helper.currency-text :value="$transaction->value"/> - {{ $transaction->account->accountHolder->name }}
    </x-slot:title>

    <div class="col">
        <div class="hstack gap-2">
            <x-action.button.back :url="route('transactions.index')" />
            <div class="vr"></div>
            <x-action.button.create url="{{ route('transactions.create') }}"/>
            <x-action.button.edit url="{{ route('transactions.edit', $transaction) }}"/>
            <x-action.button.delete action="{{ route('transactions.destroy', $transaction->id) }}" :object="$transaction" />
        </div>
    </div>
    
    <x-transactions.show 
        :go-back="route('transactions.index')" 
        :transaction="$transaction"/>
</x-layout>
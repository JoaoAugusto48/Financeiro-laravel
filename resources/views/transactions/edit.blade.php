<x-layout page-name="Transaction">
    <x-slot:title>
        Atualizar - <x-helper.currency-text :value="$transaction->value"/> ({{ $transaction->account->accountHolder->name }})
    </x-slot:title>

    <x-transactions.form :action="route('transactions.update', $transaction->id)"
                :go-back="route('transactions.index')"
                :transaction="$transaction"
                :accounts="$accounts"
                :related-accounts="$relatedAccounts"
                :allowances="$allowances"
                :today="$today"/>
</x-layout>

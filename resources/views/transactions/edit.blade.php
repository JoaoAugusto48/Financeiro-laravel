<x-layout page-name="Transaction">
    <x-slot:title>
        Atualizar - <x-helper.currency-text :value="$transaction->value"/> ({{ $transaction->account->accountHolder->name }})
    </x-slot:title>

    <x-transactions.form :action="route('transactions.update', $transaction->id)"
        :go-back="route('transactions.show', $transaction)"
        :$transaction :$accounts :$relatedAccounts 
        :$allowances :$today/>
</x-layout>

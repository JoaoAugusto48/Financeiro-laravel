<x-layout page-name="Transaction">
    <x-slot:title>
        Atualizar: <x-helper.currency-text :value="$transaction->value"/> ({{ $transaction->account->accountHolder->name }})
    </x-slot:title>

    <form action="{{ route('transactions.update', $transaction) }}" method="post">
        @csrf
        @method('PUT')
        
        <div class="row">
            <div class="col">
                <div class="hstack gap-2">
                    <x-action.button.back/>
                    <div class="vr"></div>
                    <x-action.button.create label="New Account" :url="route('accounts.create')" class="btn btn-outline-primary"/>
                    <x-action.button.create label="New Account Holder" :url="route('holders.create')" class="btn btn-outline-primary"/>
                    <x-action.button.save/>
                </div>
            </div>
        </div>

        <x-transactions.form :$transaction :$accounts 
            :$relatedAccounts :$allowances :$today/>
    </form>
</x-layout>

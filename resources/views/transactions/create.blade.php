<x-layout title="Nova Transação" page-name="Transaction">

    <form action="{{ route('transactions.store') }}" method="post">
        @csrf
    
        <div class="row">
            <div class="col">
                <div class="hstack gap-2">
                    <x-action.button.back/>
                    <div class="vr"></div>
                    <x-action.button.create label="New Account Holder" :url="route('holders.create')" class="btn btn-outline-primary"/>
                    <x-action.button.save/>
                </div>
            </div>
        </div>

        <x-transactions.form :$transactionsEnum :$accounts 
                :$relatedAccounts :$allowances :$today/>
    </form>
</x-layout>

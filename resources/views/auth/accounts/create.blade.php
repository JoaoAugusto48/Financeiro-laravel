<x-layout title="Nova Conta" page-name="Account">

    <form action="{{ route('accounts.store') }}" method="post">
        @csrf

        <div class="row">
            <div class="col">
                <div class="hstack gap-2">
                    <x-action.button.back/>
                    <div class="vr"></div>
                    <x-action.button.create label="New Bank" :url="route('banks.create')" class="btn btn-outline-primary"/>
                    <x-action.button.create label="New Holder" :url="route('holders.create')" class="btn btn-outline-primary"/>
                    <x-action.button.save/>
                </div>
            </div>
        </div>
    
        <x-accounts.form :$banks :$accountHolders/>
    </form>
</x-layout>
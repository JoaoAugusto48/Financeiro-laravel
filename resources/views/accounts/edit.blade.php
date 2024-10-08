<x-layout page-name="Account">
    <x-slot:title>
        Atualizar: <x-helper.text.account :$account/>
    </x-slot:title>

    <form action="{{ route('accounts.update', $account) }}" method="post">
        @csrf
        @method('PUT')
        
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
    
        <x-accounts.form :$account :$banks :$accountHolders/>
    </form>
</x-layout>
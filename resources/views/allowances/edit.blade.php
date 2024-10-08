<x-layout page-name="Allowance">
    <x-slot:title>
        Atualizar: {{ $allowance->title }}
    </x-slot:title>

    <form action="{{ route('allowances.update', $allowance) }}" method="post">
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

        <x-allowances.form :$allowance :$transactions :$accounts :$relatedAccounts/>
    </form>
</x-layout>
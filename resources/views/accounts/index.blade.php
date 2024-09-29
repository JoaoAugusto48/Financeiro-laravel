<x-layout title="Account" page-name="Account">
    
    <x-helper.alert :$messages/>

    <div class="row mb-2">
        <div class="col">
            <x-action.button.create url="{{ route('accounts.create') }}"/>
        </div>
        <div class="col ms-auto h3 text-end">
            Amount: 
            <x-helper.currency-text-color value="{{ $accountBalances }}">
                <x-helper.currency-text :value="$accountBalances"/>
            </x-helper.currency-text-color>
        </div>
    </div>

    <div class="row ">
        
    </div>

    <div class="row">
        {{ $accounts->links() }}
    </div>

    <div class="row row-cols-4">
        @foreach ($accounts as $account)
            <x-cards.account-card :account="$account"/>
        @endforeach
    </div>
</x-layout>

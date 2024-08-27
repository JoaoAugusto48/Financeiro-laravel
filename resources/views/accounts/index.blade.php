<x-layout title="Account" pageName="Account">
    
    <x-alerts.danger :error="$error"/>
    <x-alerts.success :success="$success"/>

    <div class="row mb-2">
        <div class="col">
            <x-action.button.button-create url="{{ route('accounts.create') }}"/>
        </div>
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

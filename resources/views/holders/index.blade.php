<x-layout title="Account Holder" pageName="Holder">
    
    <x-alerts.danger :error="$error"/>
    <x-alerts.success :success="$success"/>

    <div class="row mb-2">
        <div class="col">
            <x-action.button.button-create url="{{ route('holders.create') }}"/>
        </div>
    </div>

    <div class="row">
        {{ $accountHolders->links() }}
    </div>

    <div class="row row-cols-4">
        @foreach ($accountHolders as $accountHolder)
            <x-cards.account-holder-card :accountHolder="$accountHolder"/>
        @endforeach
    </div>
</x-layout>

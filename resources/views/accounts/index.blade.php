<x-layout title="Account">
    
    <x-alerts.danger :error="$error"/>
    <x-alerts.success :success="$success"/>

    <div class="row mb-2">
        <div class="col">
            <x-buttons.create :href="route('accounts.create')" />
        </div>
    </div>
    <div class="row row-cols-4">
        @foreach ($accounts as $account)
            <x-cards.accounts :account="$account"/>
        @endforeach
    </div>
</x-layout>

<x-layout title="Account Holder">
    
    <x-alerts.danger :error="$error"/>
    <x-alerts.success :success="$success"/>

    <div class="row mb-2">
        <div class="col">
            <x-buttons.create :href="route('holders.create')" />
        </div>
    </div>
    <div class="row row-cols-4">
        @foreach ($accountHolders as $accountHolder)
            <x-cards.holders :accountHolder="$accountHolder"/>
        @endforeach
    </div>
</x-layout>

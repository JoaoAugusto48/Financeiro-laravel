<x-layout title="Account Holder" page-name="Holder">
    
    <x-helper.alert :$messages/>

    <div class="row mb-2">
        <div class="col">
            <x-action.button.create :url="route('holders.create')"/>
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

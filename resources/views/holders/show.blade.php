<x-layout title="{{ $accountHolder->name }}" pageName="Holder">

    <div class="row mb-2">
        <div class="col">
            <x-action.button.button-back :url="route('holders.index')" />
        </div>
    </div>

    <x-cards.related-card 
        :allowances="$allowances" 
        :accounts="$accounts"
        :transactions="$transactions"/>
</x-layout>


<x-layout title="{{ $accountHolder->name }}" page-name="Holder">

    <div class="row mb-2">
        <div class="col">
            <div class="hstack gap-2">
                <x-action.button.back/>
                <div class="vr"></div>
                <x-action.button.create :url="route('holders.create')"/>
                <x-action.button.edit :url="route('holders.edit', $accountHolder)"/>
                <x-action.button.delete :action="route('holders.destroy', $accountHolder->id)" :object="$accountHolder" />
            </div>
        </div>
    </div>

    <x-cards.related-card 
        :allowances="$allowances" 
        :accounts="$accounts"
        :transactions="$transactions"/>
</x-layout>


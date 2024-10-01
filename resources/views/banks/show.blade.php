<x-layout title="{{ $bank->name }}" page-name="Bank">
    
    <div class="row">
        <div class="col">
            <div class="hstack gap-2">
                <x-action.button.back :url="route('banks.index')"/>
                <div class="vr"></div>
                <x-action.button.create :url="route('banks.create')"/>
                <x-action.button.edit :url="route('banks.edit', $bank)"/>
                <x-action.button.delete :action="route('banks.destroy', $bank->id)" :object="$bank"/>
            </div>
        </div>
    </div>
    
    <x-banks.show :$bank/>
</x-layout>
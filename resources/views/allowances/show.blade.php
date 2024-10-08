<x-layout title="{{ $allowance->title }}" page-name="Allowance">

    <div class="row">
        <div class="col">
            <div class="hstack gap-2">
                <x-action.button.back/>
                <div class="vr"></div>
                <x-action.button.create :url="route('allowances.create')"/>
                <x-action.button.edit :url="route('allowances.edit', $allowance)"/>
                <x-action.button.delete :action="route('allowances.destroy', $allowance->id)" :object="$allowance" />
            </div>
        </div>
    </div>    

    <x-allowances.show :$allowance/>
</x-layout>
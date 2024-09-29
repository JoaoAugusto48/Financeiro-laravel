<div class="row mb-2">
    <div class="col">
        <div class="hstack gap-2">
            <x-action.button.back url="{{ $goBack }}"/>
            <div class="vr"></div>
            <x-action.button.create label="New Bank" :url="route('banks.create')" class="btn btn-outline-primary"/>
            <x-action.button.create label="New Holder" :url="route('holders.create')" class="btn btn-outline-primary"/>
            <x-action.button.save/>
        </div>
    </div>
</div>
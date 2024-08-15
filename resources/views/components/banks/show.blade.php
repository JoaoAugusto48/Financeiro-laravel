<div class="row">
    <div class="col">
        <div class="hstack gap-2">
            <x-buttons.return :href="$goBack" />
            <div class="vr"></div>
            <x-buttons.create :href="route('banks.create')" />
            <x-buttons.edit :href="route('banks.edit', $bank)" />
        </div>
    </div>
</div>

<div class="mt-2">
    <div class="row">
        <div class="col-3">
            <x-form.input-show label="Número" value="{{ $bank->number }}"/>
        </div>
        <div class="col-3">
            <x-form.input-show label="Sigla" value="{{ $bank->abbreviation }}"/>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <x-form.input-show label="Nome" value="{{ $bank->name }}"/>
        </div>
    </div>
    
    <x-form.timestamps 
        createdAt="{{ $bank->created_at }}"
        updatedAt="{{ $bank->updated_at }}"
        format="d/m/Y H:i"/>
</div>
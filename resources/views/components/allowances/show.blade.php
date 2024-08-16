<div class="row">
    <div class="col">
        <div class="hstack gap-2">
            <x-buttons.return :href="$goBack" />
            <div class="vr"></div>
            <x-buttons.create :href="route('allowances.create')"/>
            <x-buttons.edit :href="route('allowances.edit', $allowance)" />
        </div>
    </div>
</div>

<div class="mt-2">
    <div class="row">
        <div class="col-6">
            <x-form.input-show label="Título" value="{{ $allowance->title }}"/>
        </div>
        <div class="col-3">
            <x-form.input-group-show label="Valor" value="{{ $allowance->value}}"/>
        </div>
        <div class="col-3">
            <x-form.input-show label="Titular" value="{{ $allowance?->account->accountHolder->name }}"/>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-6">
            <x-form.text-area-show label="Descrição" value="{{ $allowance->description }}"/>
        </div>
        <div class="col-3">
            <x-form.input-show label="Tipo transação" value="{{ $allowance->kindTransaction }}"/>
        </div>
        <div class="col-3">
            <x-form.input-show label="Conta relacionada" value="{{ $allowance->relatedHolder?->name }}"/>
        </div>
    </div>

    <x-form.timestamps 
        class="col-4"
        createdAt="{{ $allowance->created_at }}"
        updatedAt="{{ $allowance->updated_at }}"
        format="d/m/Y H:i"/>
</div>
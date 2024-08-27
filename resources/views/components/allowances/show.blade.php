<div class="row">
    <div class="col">
        <div class="hstack gap-2">
            <x-action.button.button-back url="{{ $goBack }}"/>
            <div class="vr"></div>
            <x-action.button.button-create url="{{ route('allowances.create') }}"/>
            <x-action.button.button-edit url="{{ route('allowances.edit', $allowance) }}"/>
        </div>
    </div>
</div>

<div class="mt-2">
    <div class="row">
        <div class="col-6">
            <x-form.input.input-show label="Título" value="{{ $allowance->title }}"/>
        </div>
        <div class="col-3">
            <x-form.input.input-group-show label="Valor" value="{{ $allowance->value}}" group="R$"/>
        </div>
        <div class="col-3">
            <x-form.input.input-show label="Titular" value="{{ $allowance?->account->accountHolder->name }}"/>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-6">
            <x-form.textarea.textarea-show label="Descrição" value="{{ $allowance->description }}"/>
        </div>
        <div class="col-3">
            <x-form.input.input-show label="Tipo transação" value="{{ $allowance->kindTransaction }}"/>
        </div>
        <div class="col-3">
            <x-form.input.input-show label="Conta relacionada" value="{{ $allowance->relatedHolder?->name }}"/>
        </div>
    </div>

    <x-form.input.timestamps 
        class="col-4"
        createdAt="{{ $allowance->created_at }}"
        updatedAt="{{ $allowance->updated_at }}"
        format="d/m/Y H:i"/>
</div>
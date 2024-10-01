<div class="mt-2">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-6">
                    <x-form.input.show label="Título" value="{{ $allowance->title }}"/>
                </div>
                <div class="col-3">
                    <x-form.input.group-show label="Valor" value="{{ $allowance->value}}" group="R$"/>
                </div>
                <div class="col-3">
                    <x-form.input.show label="Titular" value="{{ $allowance?->account->accountHolder->name }}"/>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-6">
                    <x-form.textarea.textarea-show label="Descrição" value="{{ $allowance->description }}"/>
                </div>
                <div class="col-3">
                    <x-form.radio.transaction-enum-show label="Tipo transação" checked="{{ $allowance->kindTransaction }}"/>
                </div>
                <div class="col-3">
                    <x-form.input.show label="Conta relacionada" value="{{ $allowance->relatedHolder?->name }}"/>
                </div>
            </div>

            <x-form.input.timestamps 
                class="col-4"
                createdAt="{{ $allowance->created_at }}"
                updatedAt="{{ $allowance->updated_at }}"
                format="d/m/Y H:i"/>
        </div>
    </div>
</div>
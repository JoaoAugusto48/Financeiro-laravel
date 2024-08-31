<div class="row">
    <div class="col">
        <div class="hstack gap-2">
            <x-action.button.button-back url="{{ $goBack }}" />
            <div class="vr"></div>
            <x-action.button.button-create url="{{ route('transactions.create') }}"/>
            <x-action.button.button-edit url="{{ route('transactions.edit', $transaction) }}"/>
        </div>
    </div>

    <div class="mt-2">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-3">
                        <x-form.input.input-show label="Titular" value="{{ $transaction->account->accountNumber }} | {{ $transaction->account->accountHolder->name }} - {{ $transaction->account->bank->abbreviation }}"/>
                    </div>
                    <div class="col-3">
                        <x-form.input.input-group-show label="Valor" value="{{ $transaction->value }}" group="R$"/>
                    </div>
                    <div class="col-3">
                        <x-form.input.input-show label="Conta relacionada" value="{{ $transaction->relatedHolder?->name }}"/>
                    </div>
                    <div class="col-3">
                        <x-form.input.input-date-show label="Data da Transação" value="{{ $transaction->dateTransaction }}" format="d/m/Y"/>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-3">
                        <x-form.radio.radio-transaction-enum-show label="Tipo transação" checked="{{ $transaction->kindTransaction }}"/>
                    </div>
                    <div class="col-6">
                        <x-form.textarea.textarea-show label="Descrição" value="{{ $transaction->description }}"/>
                    </div>
                </div>

                <x-form.input.timestamps 
                    class="col-3"
                    createdAt="{{ $transaction->created_at }}"
                    updatedAt="{{ $transaction->updated_at }}"
                    format="d/m/Y H:i"/>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="hstack gap-2">
            <x-buttons.return :href="$goBack" />
            <div class="vr"></div>
            <x-buttons.create :href="route('transactions.create')" />
            <x-buttons.edit :href="route('transactions.edit', $transaction)" />
        </div>
    </div>

    <div class="mt-2">
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
                <x-form.input-date-show label="Data da Transação" value="{{ $transaction->dateTransaction }}" format="d/m/Y"/>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-3">
                <x-form.input.input-show label="Tipo transação" value="{{ $transaction->kindTransaction }}"/>
            </div>
            <div class="col-6">
                <x-form.input.input-show label="Descrição" value="{{ $transaction->description }}"/>
            </div>
        </div>

        <x-form.input.timestamps 
            createdAt="{{ $transaction->created_at }}"
            updatedAt="{{ $transaction->updated_at }}"
            format="d/m/Y H:i"/>
    </div>
</div>
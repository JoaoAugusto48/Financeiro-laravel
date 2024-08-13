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
                <label for="titular" class="form-label">Titular</label>
                <x-inputs.input-show value="{{ $transaction->account->accountNumber }} | {{ $transaction->account->accountHolder->name }} - {{ $transaction->account->bank->abbreviation }}"/>
            </div>
            <div class="col-3">
                <label for="Valor" class="form-label">Valor</label>
                <x-inputs.input-group-show value="{{ $transaction->value }}">R$</x-inputs.input-group-show>
            </div>
            <div class="col-3">
                <label for="conta" class="form-label">Conta relacionada</label>
                <x-inputs.input-show value="{{ $transaction->relatedHolder?->name }}"/>
            </div>
            <div class="col-3">
                <label for="data" class="form-label">Data da Transação</label>
                <x-inputs.input-show value="{{ $transaction->dateTransaction }}"/>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-3">
                <label for="tipoTransacao" class="form-label">Tipo transação</label>
                <x-inputs.input-show value="{{ $transaction->kindTransaction }}"/>
            </div>
            <div class="col-6">
                <label for="textarea" class="form-label">Descrição</label>
                <x-inputs.textarea-show>{{ $transaction->description }}</x-inputs.textarea-show>
            </div>
        </div>

        <x-inputs.timestamps-show class="col-3"
            :createdAt="$transaction->created_at"
            :updatedAt="$transaction->updated_at"/>
    </div>
</div>
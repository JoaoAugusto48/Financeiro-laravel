<div class="row">
    <div class="col">
        <div class="hstack gap-2">
            <x-buttons.return :href="$goBack" />
            <div class="vr"></div>
            <x-buttons.create :href="route('accounts.create')" />
            <x-buttons.edit :href="route('accounts.edit', $account)" />
        </div>
    </div>
</div>

<div class="mt-2">
    <div class="row">
        <div class="col-4">
            <label for="banco" class="form-label">Banco</label>
            <x-inputs.input-show value="{{ $account->bank->number }} | {{ $account->bank->name }} - {{ $account->bank->abbreviation }}"/>
        </div>
        <div class="col-4">
            <label for="titular" class="form-label">Titular da conta</label>
            <x-inputs.input-show :value="$account->accountHolder->name"/>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <div class="mb-3">
                <label for="numeroConta" class="form-label">Número da Conta</label>
                <x-inputs.input-show :value="$account->accountNumber"/>
            </div>
        </div>
        <div class="col-4">
            <label for="saldoAtual" class="form-label">Saldo atual</label>
            <div class="input-group">
                <x-inputs.input-group-show :value="$account->balance">R$</x-inputs.input-group-show>
            </div>
        </div>
    </div>

    <x-inputs.timestamps-show class="col-4"
        :createdAt="$account->created_at"
        :updatedAt="$account->updated_at"/>
</div>
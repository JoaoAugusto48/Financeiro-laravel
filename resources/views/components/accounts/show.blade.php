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
            <input type="text"
                class="form-control" 
                value="{{ $account->bank->number }} | {{ $account->bank->name }} - {{ $account->bank->abbreviation }}"
                disabled readonly>
        </div>
        <div class="col-4">
            <label for="titular" class="form-label">Titular da conta</label>
            <input type="text"
                    class="form-control" 
                    value="{{ $account->accountHolder->name }}"
                    disabled readonly>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <div class="mb-3">
                <label for="numeroConta" class="form-label">Número da Conta</label>
                <input type="text"
                        class="form-control" 
                        value="{{ $account->accountNumber }}"
                        disabled readonly>
            </div>
        </div>
        <div class="col-4">
            <label for="saldoAtual" class="form-label">Saldo atual</label>
            <div class="input-group">
                <span class="input-group-text">R$</span>
                <input type="text"
                    class="form-control" 
                    value="{{ $account->balance }}"
                    disabled readonly>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <div class="mb-3">
                <label for="criado" class="form-label">Criado em</label>
                <input type="text" 
                        class="form-control" 
                        value="{{ $account->created_at->format('d/m/Y H:i') }}"
                        disabled readonly>
            </div>
        </div>
        <div class="col-4">
            <div class="mb-3">
                <label for="criado" class="form-label">Atualizado em</label>
                <input type="text" 
                        class="form-control" 
                        value="{{ $account->updated_at->format('d/m/Y H:i') }}"
                        disabled readonly>
            </div>
        </div>
    </div>
</div>
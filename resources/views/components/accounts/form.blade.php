<form action={{ $action }} method="post">
    @csrf

    @isset($account)
        @method('PUT')
    @endisset
    <div class="row">
        <div class="col">
            <div class="hstack gap-2">
                <x-buttons.return :href="$goBack" />
                <div class="vr"></div>
                <x-buttons.save />
            </div>
        </div>
    </div>

    <div class="mt-2">
        <div class="row">
            <div class="col-4">
                @empty ($account)
                    <x-form.select.bank-select 
                        label="Banco" 
                        name="banco" 
                        :options="$banks" 
                        required
                        autofocus/>
                @endempty
                @isset($account)
                    <x-form.input-show label="Banco" value="{{ $account->bank->number }} | {{ $account->bank->name }} - {{ $account->bank->abbreviation }}" />
                @endisset
            </div>
            <div class="col-4">
                @empty ($account)
                    <x-form.select.account-holder-select 
                        label="Titular da conta" 
                        name="titular" 
                        :options="$accountHolders"
                        required/>
                @endempty
                @isset($account)
                    <x-form.input-show label="Titular da conta" value="{{ $account->accountHolder->name }}"/>
                @endisset
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <x-form.input type="text" 
                        label="Número da Conta" 
                        name="numeroConta"  
                        placeholder="ex: 123"
                        value="{{ $account->accountNumber ?? '' }}"
                        autocomplete="off"
                        maxlength="10"
                        @isset($account) 
                            autofocus 
                        @endisset/>
                <div class="mb-3">
                    <label for="numeroConta" class="form-label">Número da Conta</label>
                    <input type="text"
                            name="numeroConta" 
                            class="form-control" 
                            id="numeroConta" 
                            placeholder="ex: 123" 
                            autocomplete="off"
                            maxlength="10"
                            @isset($account) 
                                value="{{ $account->accountNumber }}"
                                autofocus 
                            @endisset>
                </div>
            </div>
            <div class="col-4">
                @empty($account)
                <x-form.input-group type="text" 
                        label="Saldo atual" 
                        name="saldoAtual"  
                        placeholder="ex: 200,00"
                        value="{{ old('saldoAtual' , '0.00') }}"
                        inputmode="numeric"
                        autocomplete="off"/>
                @endempty
                @isset($account)
                    <x-form.input-group-show label="Saldo atual" value="{{ $account->balance }}" group="R$"/>
                @endisset
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <x-buttons.save />
        </div>
    </div>
</form>

<script>
    const moneyInput = document.getElementById('saldoAtual');

    moneyInput.addEventListener('input', (event) => {
        let value = event.target.value.replace(/\D/g, '').replace(/^0+/, '');

        if (value.length === 0) {
            value = '0.00';
        } else if (value.length === 1) {
            value = '0.0' + value;
        } else if (value.length === 2) {
            value = '0.' + value;
        } else {
            value = value.slice(0, -2) + '.' + value.slice(-2);
        }

        event.target.value = value;
    });
</script>
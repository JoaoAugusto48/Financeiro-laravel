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
                <label for="banco" class="form-label">Banco</label>
                @isset($banks)
                    <select class="form-select" id="banco" name="banco" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        @foreach ($banks as $bank)
                            <option value="{{ $bank->id }}">{{ $bank->number }} | {{ $bank->name }} - {{ $bank->abbreviation }}</option>
                        @endforeach
                    </select>
                @endisset
                @empty($banks)
                    <input type="text"
                        class="form-control" 
                        value="{{ $account->bank->number }} | {{ $account->bank->name }} - {{ $account->bank->abbreviation }}"
                        disabled readonly>
                @endempty
            </div>
            <div class="col-4">
                <label for="titular" class="form-label">Titular da conta</label>
                @isset($accountHolders)
                    <select class="form-select" id="titular" name="titular" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        @foreach ($accountHolders as $holder)
                            <option value="{{ $holder->id }}">{{ $holder->name }}</option>
                        @endforeach
                    </select>
                @endisset
                @empty($accountHolders)
                    <input type="text"
                        class="form-control" 
                        value="{{ $account->accountHolder->name }}"
                        disabled readonly>
                @endempty
            </div>
        </div>
        <div class="row">
            <div class="col-4">
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
                <label for="saldoAtual" class="form-label">Saldo atual</label>
                <div class="input-group">
                    <span class="input-group-text">R$</span>
                    @empty($account)
                    <input type="text"
                            inputmode="numeric"
                            name="saldoAtual" 
                            class="form-control" 
                            id="saldoAtual" 
                            placeholder="ex: 200,00" 
                            autocomplete="off"
                            value="{{ old('saldoAtual' , '0.00') }}"/>
                    @endempty
                    @isset($account)
                    <input type="text"
                        class="form-control" 
                        value="{{ $account->balance }}"
                        disabled readonly>
                    @endisset
                </div>
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
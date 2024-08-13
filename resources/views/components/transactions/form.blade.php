<form action={{ $action }} method="post">
    @csrf

    @isset($transaction)
        @method('PUT')
    @endisset
    <div class="row">
        <div class="col">
            <div class="hstack gap-2">
                <x-buttons.return :href="$goBack" />
                <div class="vr"></div>
                <x-buttons.save/>
            </div>
        </div>
    </div>

    <div class="mt-2">
        @empty($transaction)
        <div class="row mb-2">
            <div class="col-6">
                <label for="allowance" class="form-label">Mensalidade</label>
                <select class="form-select" id="allowance" aria-label="Default select example">
                    <option value="" selected>Atalho de preenchimento</option>
                    @foreach ($allowances as $allowance)
                        <option value="{{ $allowance->id }}" 
                            data-value="{{ $allowance->value }}" 
                            data-kind="{{ $allowance->kindTransaction }}" 
                            data-account="{{ $allowance->account->accountHolder->name }}">
                            {{ $allowance->title }} - R$ {{ $allowance->value }} - {{ $allowance->kindTransaction }} - {{ $allowance->account->accountHolder->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        @endempty
        <div class="row">
            <div class="col-3">
                <label for="titular" class="form-label">Titular</label>
                @empty($transaction)
                <select class="form-select" id="titular" name="titular" aria-label="Default select example" autofocus>
                    <option value="" selected>Open this select menu</option>
                    @foreach ($accounts as $account)
                        <option value="{{ $account->id }}"
                            @isset($transaction->account_id)
                                @if ($transaction->account_id == $account->id) @selected(true) @endif
                            @endisset 
                            @empty($transaction->account_id)
                                @if ($account->id == old('titular')) @selected(true) @endif
                            @endempty
                            >
                            {{ $account->accountNumber }} | {{ $account->accountHolder->name }} - {{ $account->bank->abbreviation }} 
                        </option>
                    @endforeach
                </select>
                @endempty
                @isset($transaction)
                <x-inputs.input-show value="{{ $transaction->account->accountNumber }} | {{ $transaction->account->accountHolder->name }} - {{ $transaction->account->bank->abbreviation }}"/>  
                @endisset
            </div>
            <div class="col-3">
                <label for="Valor" class="form-label">Valor</label>
                @empty($transaction)
                <div class="input-group">
                    <span class="input-group-text">R$</span>
                    <input type="text"
                            inputmode="numeric"
                            name="valor" 
                            class="form-control" 
                            id="valor" 
                            placeholder="ex: 200,00" 
                            autocomplete="off"
                            @isset($transaction->value) value="{{ $transaction->value }}" @endisset
                            @empty($transaction->value) value="{{ old('valor' , '0.00') }}" @endempty/>
                </div>
                @endempty
                @isset($transaction)
                    <x-inputs.input-group-show value="{{ $transaction->value }}">R$</x-inputs.input-group-show>
                @endisset
            </div>
            <div class="col-3">
                <label for="conta" class="form-label">Conta relacionada</label>
                <select class="form-select" id="conta" name="contaRelacionada" aria-label="Default select example">
                    <option value="" selected>Open this select menu</option>
                    @foreach ($relatedAccounts as $relatedAccount)
                        <option value="{{ $relatedAccount->id }}" 
                            @isset($transaction->relatedHolder_id)
                                @if ($transaction->relatedHolder_id == $relatedAccount->id) @selected(true) @endif
                            @endisset 
                            @empty($transaction->account_id)
                                @if ($relatedAccount->id == old('contaRelacionada')) @selected(true) @endif
                            @endempty
                            >
                            {{ $relatedAccount->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-3">
                <label for="data" class="form-label">Data da Transação</label>
                <input class="form-control"
                        type="date"
                        name="data" 
                        id="data"
                        max="{{ $today->format('Y-m-d') }}"
                        @isset($transaction->dateTransaction) value="{{ $transaction->dateTransaction }}" @endisset
                        @empty($transaction->dateTransaction) value="{{ old('data', $today->format('Y-m-d')) }}" @endempty>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-3">
                <label for="tipoTransacao" class="form-label">Tipo transação</label>
                @foreach ($transactionsEnum as $transactionEnum)
                <div class="form-check">
                    <input class="form-check-input" 
                            type="radio" 
                            name="tipoTransacao" 
                            id="tipo{{ $transactionEnum->value }}"
                            value="{{ $transactionEnum->value }}"
                            @isset($transaction->kindTransaction)
                                @if ($transaction->kindTransaction == $transactionEnum->name) @checked(true) @endif 
                                @disabled(true) @readonly(true)   
                            @endisset
                            @empty($transaction->kindTransaction)
                                @if (old('tipoTransacao') == $transactionEnum->value) @checked(true) @endif
                            @endempty
                            >
                    <label class="form-check-label" for="tipo{{ $transactionEnum->value }}">
                      {{ $transactionEnum->value }}
                    </label>
                </div>
                @endforeach
            </div>
            <div class="col-6">
                <label for="textarea" class="form-label">Descrição</label>
                <textarea class="form-control" name="descricao" id="textarea" rows="3">@isset($transaction->description){{ $transaction->description }}@endisset @empty($allowance->description){{ old('descricao') }}@endempty</textarea>
            </div>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col">
            <x-buttons.save/>
        </div>
    </div>
</form>

<script>
    const allowanceSelect = document.getElementById('allowance');
    const valueInput = document.getElementById('valor');
    const titularSelect = document.getElementById('titular');
    const transactionTypeRadios = document.getElementsByName('tipoTransacao');

    const transactionMap = {
        'Deposit': 'Deposito',
        'Withdraw': 'Saque'
    };

    allowanceSelect.addEventListener('change', (event) => {
        const selectedOption = event.target.options[event.target.selectedIndex];
        const value = selectedOption.getAttribute('data-value');
        const kind = selectedOption.getAttribute('data-kind');
        const account = selectedOption.getAttribute('data-account');
        
        if (value) {
            valueInput.value = value;
        }

        if (account) {
            for (let i = 0; i < titularSelect.options.length; i++) {
                if (titularSelect.options[i].text.includes(account)) {
                    titularSelect.selectedIndex = i;
                    break;
                }
            }
        }

        if (kind) {
            const mappedKind = transactionMap[kind] || kind;
            for (let i = 0; i < transactionTypeRadios.length; i++) {
                // Remove qualquer seleção manual feita anteriormente
                transactionTypeRadios[i].checked = false;

                if (transactionTypeRadios[i].value.trim() === mappedKind.trim()) {
                    transactionTypeRadios[i].checked = true;
                }
            }
        }
    });

    const moneyInput = document.getElementById('valor');

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
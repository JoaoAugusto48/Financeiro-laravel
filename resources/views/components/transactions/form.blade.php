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
                <x-buttons.save />
            </div>
        </div>
    </div>

    <div class="mt-2">
        <div class="row">
            <div class="col-6">
            </div>
            <div class="col-3">
                <label for="Valor" class="form-label">Valor</label>
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
            </div>
            <div class="col-3">
                <label for="titular" class="form-label">Titular</label>
                <select class="form-select" id="titular" name="titular" aria-label="Default select example">
                    <option value="" selected>Open this select menu</option>
                    @foreach ($accountHolders as $holder)
                        <option value="{{ $holder->id }}"
                            @isset($transaction->account_id)
                                @if ($transaction->account_id == $holder->id) @selected(true) @endif
                            @endisset 
                            @empty($transaction->account_id)
                                @if ($holder->id == old('titular')) @selected(true) @endif
                            @endempty
                            >
                            {{ $holder->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-6">
                <label for="textarea" class="form-label">Descrição</label>
                <textarea class="form-control" name="descricao" id="textarea" rows="3">@isset($transaction->description){{ $transaction->description }}@endisset @empty($allowance->description){{ old('descricao') }}@endempty</textarea>
            </div>
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
            <div class="col-3">
                <label for="Conta" class="form-label">Conta relacionada</label>
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
        </div>
    </div>

    <div class="row mt-2">
        <div class="col">
            <x-buttons.save/>
        </div>
    </div>
</form>

<script>
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
<form action={{ $action }} method="post">
    @csrf

    @isset($allowance)
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
                <label for="titulo" class="form-label">Título</label>
                    <input type="text"
                            name="titulo" 
                            class="form-control" 
                            id="titulo" 
                            placeholder="ex: Conta de água" 
                            autocomplete="off"
                            autofocus
                            value="{{ old('titulo') }}"/>
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
                            value="{{ old('valor' , '0.00') }}"/>
                </div>
            </div>
            <div class="col-3">
                <label for="Conta" class="form-label">Conta relacionada</label>
                <select class="form-select" id="conta" name="contaRelacionada" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    @foreach ($accountHolders as $holder)
                        <option value="{{ $holder->id }}">{{ $holder->name }}</option>
                    @endforeach
                  </select>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-6">
                <label for="textarea" class="form-label">Descrição</label>
                <textarea class="form-control" name="descricao" id="textarea" rows="3">{{ old('descricao') }}</textarea>
            </div>
            <div class="col-3">
                <label for="tipoTransacao" class="form-label">Tipo transação</label>
                @foreach ($transactions as $transaction)
                <div class="form-check">
                    <input class="form-check-input" 
                            type="radio" 
                            name="tipoTransacao" 
                            id="tipo{{ $transaction->value }}"
                            value="{{ $transaction->value }}"
                            {{ old('tipoTransacao') == $transaction->value ? 'checked' : '' }}>
                    <label class="form-check-label" for="tipo{{ $transaction->value }}">
                      {{ $transaction->value }}
                    </label>
                </div>
                @endforeach
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
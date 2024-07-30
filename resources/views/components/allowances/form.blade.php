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
                            autofocus/>
            </div>
            <div class="col-3">
                <label for="Valor" class="form-label">Valor</label>
                <div class="input-group">
                    <span class="input-group-text">R$</span>
                    <input type="text"
                            name="valor" 
                            class="form-control" 
                            id="valor" 
                            placeholder="ex: 200,00" 
                            autocomplete="off"/>
                </div>
            </div>
            <div class="col-3">
                <label for="tipoTransacao" class="form-label">Tipo transação</label>
                <select class="form-select" 
                        id="tipoTransacao"
                        name="tipoTransacao" 
                        aria-label="Default select example">
                    <option value="" disabled selected>Selecione</option>
                    @foreach ($transactions as $transaction)
                        <option value="saque">{{ $transaction->value }}</option>                 
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-6">
                <label for="textarea" class="form-label">Descrição</label>
                <textarea class="form-control" name="descricao" id="textarea" rows="3"></textarea>
            </div>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col">
            <x-buttons.save/>
        </div>
    </div>
</form>
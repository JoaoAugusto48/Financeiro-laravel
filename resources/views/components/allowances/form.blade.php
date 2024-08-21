<form action={{ $action }} method="post">
    @csrf

    @isset($allowance)
        @method('PUT')
    @endisset
    <div class="row">
        <div class="col">
            <div class="hstack gap-2">
                <x-action.button.button-back url="{{ $goBack }}"/>
                <div class="vr"></div>
                <x-action.button.button-save/>
            </div>
        </div>
    </div>

    <div class="mt-2">
        <div class="row">
            <div class="col-6">
                <x-form.input type="text" 
                        label="Título" 
                        name="titulo"  
                        placeholder="ex: Conta de água"
                        autocomplete="off"
                        autofocus
                        value="{{ $allowance->title ?? old('titulo') }}"
                        required/>
            </div>
            <div class="col-3">
                <x-form.input.input-group-money 
                        label="Valor" 
                        name="valor"  
                        value="{{ $allowance->value ?? '' }}"/>
            </div>
            <div class="col-3">
                <x-form.select.account-select 
                        label="Titular" 
                        name="titular" 
                        :options="$accounts"
                        selected="{{ $allowance->account_id ?? '' }}"
                        required/>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-6">
                <x-form.textarea 
                    label="Descrição"
                    name="descricao"
                    rows="3"
                    value="{{ $allowance->description ?? '' }}"/>
            </div>
            <div class="col-3">
                <x-form.radio.radio-transaction-enum
                        label="Tipo transação"
                        name="tipoTransacao"
                        checked="{{ $allowance->kindTransaction ?? '' }}"
                        :options="$transactions"
                        required/>
            </div>
            <div class="col-3">
                <x-form.select.account-holder-select 
                        label="Conta relacionada" 
                        name="contaRelacionada" 
                        :options="$relatedAccounts"
                        selected="{{ $allowance->relatedHolder_id ?? '' }}"/>
            </div>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col">
            <x-buttons.save/>
        </div>
    </div>
</form>

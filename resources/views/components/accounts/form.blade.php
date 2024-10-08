<div class="mt-2">
    <div class="row">
        <div class="col-9">
            <div class="row">
                <div class="col-6">
                    @empty ($account)
                        <x-form.select.bank-select 
                            label="Banco" 
                            name="banco" 
                            :options="$banks" 
                            required/>
                    @endempty
                    @isset($account)
                        <x-form.input.show label="Banco" value="{{ $account->bank->number }} | {{ $account->bank->name }} - {{ $account->bank->abbreviation }}" />
                    @endisset
                </div>
                <div class="col-6">
                    @empty ($account)
                        <x-form.select.account-holder-select 
                            label="Titular da conta" 
                            name="titular" 
                            :options="$accountHolders"
                            required/>
                    @endempty
                    @isset($account)
                        <x-form.input.show label="Titular da conta" value="{{ $account->accountHolder->name }}"/>
                    @endisset
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <x-form.input type="text" 
                            label="Número da Conta" 
                            name="numeroConta"  
                            placeholder="ex: 123"
                            autocomplete="off"
                            maxlength="10"
                            value="{{ $account->accountNumber ?? '' }}"
                            required/>
                </div>
                <div class="col-6">
                    @empty($account)
                    <x-form.input.group-money type="text" 
                            label="Saldo atual" 
                            name="saldoAtual"  
                            value="{{ old('saldoAtual' , '0.00') }}"
                            inputmode="numeric"
                            autocomplete="off"/>
                    @endempty
                    @isset($account)
                        <x-form.input.group-show label="Saldo atual" value="{{ $account->balance }}" group="R$"/>
                    @endisset
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <x-action.button.save/>
    </div>
</div>

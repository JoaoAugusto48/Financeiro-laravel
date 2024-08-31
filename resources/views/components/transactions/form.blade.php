<form action="{{ $action }}" method="post">
    @csrf

    @isset($transaction)
        @method('PUT')
    @endisset
    <div class="row">
        <div class="col">
            <div class="hstack gap-2">
                <x-action.button.button-back url="{{ $goBack }}"/>
                <div class="vr"></div>
                @empty($transaction)
                <x-action.button.button-create label="New Account" :url="route('accounts.create')" class="btn btn-outline-primary"/>
                @endempty
                <x-action.button.button-create label="New Account Holder" :url="route('holders.create')" class="btn btn-outline-primary"/>
                <x-action.button.button-save/>
            </div>
        </div>
    </div>

    <div class="mt-2">
        <div class="row">
            <div class="col-12">
                @empty($transaction)
                <div class="row mb-2">
                    <div class="col-6">
                        <x-form.select.allowance-select 
                            label="Mensalidade" 
                            name="allowance"
                            :options="$allowances"/>
                    </div>
                </div>
                @endempty
                <div class="row">
                    <div class="col-3">
                        @empty($transaction)
                        <x-form.select.account-select 
                                label="Titular" 
                                name="titular" 
                                :options="$accounts"
                                selected="{{ $transaction->account_id ?? '' }}"
                                required/>
                        @endempty
                        @isset($transaction)
                            <x-form.input.input-show label="Titular" value="{{ $transaction->account->accountNumber }} | {{ $transaction->account->accountHolder->name }} - {{ $transaction->account->bank->abbreviation }}"/>
                        @endisset
                    </div>
                    <div class="col-3">
                        @empty($transaction)
                        <x-form.input.input-group-money 
                                label="Valor" 
                                name="valor"  
                                value="{{ $transaction->value ?? '' }}"
                                required/>
                        @endempty
                        @isset($transaction)
                            <x-form.input.input-group-show label="Valor" value="{{ $transaction->value }}" group="R$"/>
                        @endisset
                    </div>
                    <div class="col-3">
                        <x-form.select.account-holder-select 
                                label="Conta relacionada" 
                                name="contaRelacionada" 
                                :options="$relatedAccounts"
                                selected="{{ $transaction->relatedHolder_id ?? '' }}"/>
                    </div>
                    <div class="col-3">
                        <x-form.input.input-date
                            label="Data da Transação"
                            name="data"
                            value="{{ $transaction->dateTransaction ?? '' }}"
                            max="{{ $today }}"
                            required/>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-3">
                        @empty($transaction)
                        <x-form.radio.radio-transaction-enum
                                label="Tipo transação"
                                name="tipoTransacao"
                                checked="{{ $transaction->kindTransaction ?? '' }}"
                                required/>
                        @endempty
                        @isset($transaction)
                            <x-form.radio.radio-transaction-enum-show label="Tipo transação" checked="{{ $transaction->kindTransaction }}"/>
                        @endisset
                    </div>
                    <div class="col-6">
                        <x-form.textarea 
                            label="Descrição"
                            name="descricao"
                            rows="3"
                            value="{{ $transaction->description ?? '' }}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col">
            <x-action.button.button-save/>
        </div>
    </div>
</form>

@push('scripts')
<script>
    const allowanceSelect = document.getElementById('allowance');
    const valueInput = document.getElementById('valor');
    const titularSelect = document.getElementById('titular');
    const transactionTypeRadios = document.getElementsByName('tipoTransacao');
    const relatedHolderSelect = document.getElementById('contaRelacionada');

    const transactionMap = {
        'Deposit': 'Deposito',
        'Withdraw': 'Saque'
    };

    allowanceSelect.addEventListener('change', (event) => {
        const selectedOption = event.target.options[event.target.selectedIndex];
        const value = selectedOption.getAttribute('data-value');
        const kind = selectedOption.getAttribute('data-kind');
        const account = selectedOption.getAttribute('data-account');
        const relatedHolder = selectedOption.getAttribute('data-related-holder');
        
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

        if (relatedHolder) {
            const optionToSelect = Array.from(relatedHolderSelect.options).find(option => option.text.includes(relatedHolder));
            relatedHolderSelect.value = optionToSelect ? optionToSelect.value : '';
        } else {
            relatedHolderSelect.value = '';
        }

    });
</script>
@endpush
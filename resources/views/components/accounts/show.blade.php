<div class="row">
    <div class="col">
        <div class="hstack gap-2">
            <x-action.button.back url="{{ $goBack }}"/>
            <div class="vr"></div>
            <x-action.button.create url="{{ route('accounts.create') }}" />
            <x-action.button.edit url="{{ route('accounts.edit', $account) }}" />
            <x-action.button.delete action="{{ route('accounts.destroy', $account->id) }}" :object="$account" />
        </div>
    </div>
</div>

<div class="mt-2">
    <div class="row">
        <div class="col-9">
            <div class="row">
                <div class="col-6">
                    <x-form.input.show label="Banco" value="{{ $account->bank->number }} | {{ $account->bank->name }} - {{ $account->bank->abbreviation }}"/>
                </div>
                <div class="col-6">
                    <x-form.input.show label="Titular da conta" value="{{ $account->accountHolder->name }}"/>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <x-form.input.show label="Número da Conta" value="{{ $account->accountNumber }}"/>
                </div>
                <div class="col-6">
                    <x-form.input.group-show label="Saldo atual" value="{{ $account->balance}}" group="R$"/>
                </div>
            </div>

            <x-form.input.timestamps 
                createdAt="{{ $account->created_at }}"
                updatedAt="{{ $account->updated_at }}"
                format="d/m/Y H:i"/>
        </div>
    </div>
</div>
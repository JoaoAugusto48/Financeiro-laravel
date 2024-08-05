<div class="row">
    <div class="col">
        <div class="hstack gap-2">
            <x-buttons.return :href="$goBack" />
            <div class="vr"></div>
            <x-buttons.create :href="route('allowances.create')"/>
            <x-buttons.edit :href="route('allowances.edit', $allowance)" />
        </div>
    </div>
</div>

<div class="mt-2">
    <div class="row">
        <div class="col-6">
            <label for="titulo" class="form-label">Título</label>
            <x-inputs.input-show :value="$allowance->title"/>
        </div>
        <div class="col-3">
            <label for="Valor" class="form-label">Valor</label>
            <x-inputs.input-group-show :value="$allowance->value">R$</x-inputs.input-group-show>
        </div>
        <div class="col-3">
            <label for="titular" class="form-label">Titular</label>
            <x-inputs.input-show :value="$allowance->account->accountHolder->name"/>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-6">
            <label for="textarea" class="form-label">Descrição</label>
            <x-inputs.textarea-show>{{ $allowance->descriptionReason }}</x-inputs.textarea-show>
        </div>
        <div class="col-3">
            <label for="tipoTransacao" class="form-label">Tipo transação</label>
            <x-inputs.input-show :value="$allowance->kindTransaction"/>
        </div>
        <div class="col-3">
            <label for="Conta" class="form-label">Conta relacionada</label>
            @isset($allowance->relatedHolder->name)
                <x-inputs.input-show :value="$allowance->relatedHolder->name"/>
            @endisset
            @empty($allowance->relatedHolder->name)   
                <x-inputs.input-show/>
            @endempty
        </div>
    </div>

    <div class="mt-2">
        <x-inputs.timestamps-show 
        :createdAt="$allowance->created_at"
        :updatedAt="$allowance->updated_at"/>
    </div>
</div>
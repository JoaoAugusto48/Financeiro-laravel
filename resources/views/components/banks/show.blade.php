<div class="row">
    <div class="col">
        <div class="hstack gap-2">
            <x-buttons.return :href="$goBack" />
            <div class="vr"></div>
            <x-buttons.create :href="route('banks.create')" />
            <x-buttons.edit :href="route('banks.edit', $bank)" />
        </div>
    </div>
</div>

<div class="mt-2">
    <div class="row">
        <div class="col-3">
            <div class="mb-3">
                <label for="numero" class="form-label">Número</label>
                <x-inputs.input-show :value="$bank->number"/>
            </div>
        </div>
        <div class="col-3">
            <div class="mb-3">
                <label for="sigla" class="form-label">Sigla</label>
                <x-inputs.input-show :value="$bank->abbreviation"/>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <x-inputs.input-show :value="$bank->name"/>
            </div>
        </div>
    </div>
    
    <x-inputs.timestamps-show 
        :createdAt="$bank->created_at"
        :updatedAt="$bank->updated_at"/>
</div>
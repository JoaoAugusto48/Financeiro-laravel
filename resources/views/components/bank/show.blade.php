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
                <input type="text"
                        class="form-control" 
                        value="{{ $bank->number }}"
                        disabled readonly>
            </div>
        </div>
        <div class="col-3">
            <div class="mb-3">
                <label for="sigla" class="form-label">Sigla</label>
                <input type="text" 
                        class="form-control" 
                        value="{{ $bank->abbreviation }}"
                        disabled readonly>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" 
                        class="form-control" 
                        value="{{ $bank->name }}"
                        disabled readonly>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <div class="mb-3">
                <label for="criado" class="form-label">Criado em</label>
                <input type="text" 
                        class="form-control" 
                        value="{{ $bank->created_at->format('d/m/Y H:i') }}"
                        disabled readonly>
            </div>
        </div>
        <div class="col-3">
            <div class="mb-3">
                <label for="criado" class="form-label">Atualizado em</label>
                <input type="text" 
                        class="form-control" 
                        value="{{ $bank->updated_at->format('d/m/Y H:i') }}"
                        disabled readonly>
            </div>
        </div>
    </div>
</div>
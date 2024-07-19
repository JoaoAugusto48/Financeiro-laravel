<form action={{ $action }} method="post">
    @csrf

    @isset($bank)
        @method('PUT')
    @endisset
    <div class="row">
        <div class="col">
            <div class="hstack gap-2">
                <x-buttons.return :href="$goBack" />
                <div class="vr"></div>
                <x-buttons.store />
            </div>
        </div>
    </div>

    <div class="mt-2">
        <div class="row">
            <div class="col-3">
                <div class="mb-3">
                    <label for="numero" class="form-label">Número</label>
                    <input type="text"
                            name="numero" 
                            class="form-control" 
                            id="numero" 
                            placeholder="004" 
                            autocomplete="off"
                            @isset($bank->number) value="{{ $bank->number }}" @endisset>
                </div>
            </div>
            <div class="col-3">
                <div class="mb-3">
                    <label for="sigla" class="form-label">Sigla</label>
                    <input type="text" 
                            name="sigla"
                            class="form-control" 
                            id="sigla" 
                            placeholder="BB" 
                            autocomplete="off"
                            @isset($bank->abbreviation) value="{{ $bank->abbreviation }}" @endisset>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" 
                            name="nome"    
                            class="form-control" 
                            id="nome" 
                            placeholder="Banco do Brasil"
                            autocomplete="off"
                            @isset($bank->name) value="{{ $bank->name }}" @endisset>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <x-buttons.store />
        </div>
    </div>
</form>

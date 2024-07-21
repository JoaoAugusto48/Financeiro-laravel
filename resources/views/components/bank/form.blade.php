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
                <x-buttons.save />
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
                            placeholder="ex: 004" 
                            autocomplete="off"
                            autofocus
                            max="3"
                            onblur="formatNumero()"
                            @isset($bank->number) value="{{ $bank->number }}" @endisset
                            @empty($bank) value="{{ old('numero') }}" @endempty>
                </div>
            </div>
            <div class="col-3">
                <div class="mb-3">
                    <label for="sigla" class="form-label">Sigla</label>
                    <input type="text" 
                            name="sigla"
                            class="form-control" 
                            id="sigla" 
                            placeholder="ex: BB" 
                            autocomplete="off"
                            max="4"
                            @isset($bank->abbreviation) value="{{ $bank->abbreviation }}" @endisset
                            @empty($bank) value="{{ old('sigla') }}" @endempty>
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
                            placeholder="ex: Banco do Brasil"
                            autocomplete="off"
                            @isset($bank->name) value="{{ $bank->name }}" @endisset
                            @empty($bank) value="{{ old('nome') }}" @endempty>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <x-buttons.save />
        </div>
    </div>
</form>

<script>
    function formatNumero() {
        let element = document.getElementById('numero')
        element.value = String(element.value).padStart(3, '0');
    }
</script>

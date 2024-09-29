<form action="{{ $action }}" method="post">
    @csrf

    @isset($bank)
        @method('PUT')
    @endisset
    <div class="row">
        <div class="col">
            <div class="hstack gap-2">
                <x-action.button.back url="{{ $goBack }}"/>
                <div class="vr"></div>
                <x-action.button.save/>
            </div>
        </div>
    </div>

    <div class="mt-2">
        <div class="row">
            <div class="col-7">
                <div class="row">
                    <div class="col-6">
                        <x-form.input type="text" 
                            label="Número" 
                            name="numero" 
                            placeholder="ex: 004" 
                            value="{{ $bank->number ?? old('numero') }}"
                            maxlength="3"
                            required autofocus
                            onblur="formatNumero()"/>
                    </div>
                    <div class="col-6">
                        <x-form.input type="text" 
                            label="Sigla" 
                            name="sigla" 
                            placeholder="ex: BB" 
                            value="{{ $bank->abbreviation ?? old('sigla') }}"
                            autocomplete="off"
                            maxlength="4"
                            required/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <x-form.input type="text" 
                            label="Nome" 
                            name="nome" 
                            placeholder="ex: Banco do Brasil" 
                            value="{{ $bank->name ?? old('nome') }}"
                            autocomplete="off"
                            required/>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <x-action.button.save />
        </div>
    </div>
</form>

@push('scripts')
<script>
    function formatNumero() {
        let element = document.getElementById('numero')
        element.value = String(element.value).padStart(3, '0');
    }
</script>
@endpush

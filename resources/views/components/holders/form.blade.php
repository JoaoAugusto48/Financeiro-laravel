<div class="mt-2">
    <div class="row">
        <div class="col-6">
            <div class="row">
                <div class="col-12">
                    <x-form.input type="text" 
                        label="Nome" 
                        name="nome" 
                        placeholder="ex: José Reinaldo" 
                        value="{{ $accountHolder->name ?? old('nome', '') }}"
                        autocomplete="off"
                        required autofocus/>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-2">
    <div class="col">
        <x-action.button.save />
    </div>
</div>

<div class="mt-2">
    <div class="row">
        <div class="col-7">
            <div class="row">
                <div class="col-6">
                    <x-form.input.show label="Número" value="{{ $bank->number }}"/>
                </div>
                <div class="col-6">
                    <x-form.input.show label="Sigla" value="{{ $bank->abbreviation }}"/>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <x-form.input.show label="Nome" value="{{ $bank->name }}"/>
                </div>
            </div>
            
            <x-form.input.timestamps 
                createdAt="{{ $bank->created_at }}"
                updatedAt="{{ $bank->updated_at }}"
                format="d/m/Y H:i"/>
        </div>
    </div>
</div>
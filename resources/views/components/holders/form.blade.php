<form action={{ $action }} method="post">
    @csrf

    @isset($accountHolder)
        @method('PUT')
    @endisset
    <div class="row">
        <div class="col">
            <div class="hstack gap-2">
                <x-action.button.button-back url="{{ $goBack }}"/>
                <div class="vr"></div>
                <x-action.button.button-save/>
            </div>
        </div>
    </div>

    <div class="mt-2">
        <div class="row">
            <div class="col-6">
                <x-form.input type="text" 
                    label="Nome" 
                    name="nome" 
                    placeholder="ex: José Reinaldo" 
                    value="{{ $accountHolder->name ?? old('nome', '') }}"
                    autocomplete="off"
                    maxlength="3"
                    required autofocus/>
            </div>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col">
            <x-buttons.save />
        </div>
    </div>
</form>

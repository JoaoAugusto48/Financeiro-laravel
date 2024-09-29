<form action={{ $action }} method="post">
    @csrf

    @isset($accountHolder)
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
</form>

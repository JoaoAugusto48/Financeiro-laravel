<form action={{ $action }} method="post">
    @csrf

    @isset($accountHolder)
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
            <div class="col-6">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" 
                    class="form-control" 
                    id="nome" 
                    name="nome"
                    placeholder="ex: José Reinaldo"
                    autocomplete="off"
                    autofocus
                    required
                    @isset($accountHolder->name) value="{{ $accountHolder->name }}" @endisset
                    @empty($accountHolder) value="{{ old('nome') }}" @endempty>
            </div>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col">
            <x-buttons.save />
        </div>
    </div>
</form>

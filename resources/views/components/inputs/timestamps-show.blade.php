@php $class = $class ?? 'col-3'; @endphp 

<div class="row">
    <div class="{{ $class }}">
        <div class="mb-3">
            <label for="criado" class="form-label">Criado em</label>
            <x-inputs.input-show :value="$createdAt->format('d/m/Y H:i')"/>
        </div>
    </div>
    <div class="{{ $class }}">
        <div class="mb-3">
            <label for="criado" class="form-label">Atualizado em</label>
            <x-inputs.input-show :value="$updatedAt->format('d/m/Y H:i')"/>
        </div>
    </div>
</div>
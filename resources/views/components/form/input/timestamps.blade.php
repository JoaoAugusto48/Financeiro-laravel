<div class="row">
    <div class="{{ $class }}">
        <x-form.input.input-show 
            label="Criado em" 
            :value="$formattedCreatedAt"
        />
    </div>
    <div class="{{ $class }}">
        <x-form.input.input-show 
            label="Atualizado em" 
            :value="$formattedUpdatedAt"
        />
    </div>
</div>
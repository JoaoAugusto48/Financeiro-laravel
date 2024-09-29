<div class="row">
    <div class="{{ $class }}">
        <x-form.input.show 
            label="Criado em" 
            :value="$formattedCreatedAt"
        />
    </div>
    <div class="{{ $class }}">
        <x-form.input.show 
            label="Atualizado em" 
            :value="$formattedUpdatedAt"
        />
    </div>
</div>
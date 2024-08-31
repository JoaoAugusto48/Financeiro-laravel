<x-cards.card class="{{ $borderColor }}">
    <h5 class="card-title">{{ $allowance->title }}</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">
        <x-helper.currency-text-color value="{{ $allowance->kindTransaction }}">
            {{ $allowance->kindTransaction }}
        </x-helper.currency-text-color> 
        - {{ $allowance->account->accountHolder->name }}
    </h6>
    <p class="card-text">
        <x-helper.currency-text-color value="{{ $allowance->kindTransaction }}">
            <x-helper.currency-text :value="$allowance->value"/>
        </x-helper.currency-text-color>
        @isset($allowance->relatedHolder)
            ({{ $allowance->relatedHolder->name }})
        @endisset
    </p>
    @isset($allowance->description)
        <p class="card-text">{{ $allowance->description }}</p>
    @endisset
    <div class="col align-self-end">
        <div class="btn-group" role="group" aria-label="Ativities">
            <x-action.button.group.button-show url="{{ route('allowances.show', $allowance->id) }}" />
            <x-action.button.group.button-edit url="{{ route('allowances.edit', $allowance->id) }}" />
            <x-action.button.group.button-delete action="{{ route('allowances.destroy', $allowance->id) }}" />
        </div>
    </div>
</x-cards.card>

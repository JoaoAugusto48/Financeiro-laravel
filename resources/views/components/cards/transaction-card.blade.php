<x-cards.card class="{{ $borderColor }}">
    <h5 class="card-title">
        <x-helper.currency-text-color value="{{ $transaction->kindTransaction }}">
            <x-helper.currency-text :value="$transaction->value"/>
        </x-helper.currency-text-color>
        | {{ $transaction->account->accountHolder->name }}</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">
        <x-helper.date-text value="{{ $transaction->dateTransaction }}" format="d/m/Y"/> ({{ $transaction->account->bank->name }})
    </h6>
    <p class="card-text">
        <x-helper.currency-text-color value="{{ $transaction->kindTransaction }}">{{ $transaction->kindTransaction }}</x-helper.currency-text-color>
        @isset($transaction->relatedHolder->name)
            ({{ $transaction->relatedHolder->name }})
        @endisset
    </p>
    @isset($transaction->description)
        <p class="card-text">Note: {{ $transaction->description }}</p>
    @endisset
    <div class="col align-self-end">
        <div class="btn-group" role="group" aria-label="Ativities">
            <x-action.button.group.button-show url="{{ route('transactions.show', $transaction->id) }}"/>
            <x-action.button.group.button-edit url="{{ route('transactions.edit', $transaction->id) }}"/>
            <x-action.button.group.button-delete action="{{ route('transactions.destroy', $transaction->id) }}" :object="$transaction"/>
        </div>
    </div>
</x-cards.card>
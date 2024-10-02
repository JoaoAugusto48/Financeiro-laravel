<x-cards.card>
    <h5 class="card-title">{{ $account->bank->name }} - {{ $account->accountNumber }}</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">{{ $account->accountHolder->name }}</h6>
    <p class="card-text">
        <x-helper.currency-text-color value="{{ $account->balance }}">
            {{ $formattedBalance }}
        </x-helper.currency-text-color>
    </p>
    <div class="col align-self-end">
        <x-action.button.stretched-link url="{{ route('accounts.show', $account->id) }}"/>
        {{-- <div class="btn-group" role="group" aria-label="Ativities">
            <x-action.button.group.show url="{{ route('accounts.show', $account->id) }}" />
            <x-action.button.group.edit url="{{ route('accounts.edit', $account->id) }}" />
            <x-action.button.group.delete action="{{ route('accounts.destroy', $account->id) }}" :object="$account"/>
        </div> --}}
    </div>
</x-cards.card>
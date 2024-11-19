<x-cards.card>
    <h5 class="card-title">{{ $bank->name }}</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">{{ $bank->number }}</h6>

    <div class="col align-self-end mt-2">
        <x-action.button.stretched-link :url="route('banks.show', $bank->id)"/>
    </div>
</x-cards.card>
<x-cards.card>
    <h5 class="card-title">{{ $allowance->title }}</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">
        <span class="{{ $textClass }}">{{ $allowance->kindTransaction }}</span> - {{ $allowance->account->accountHolder->name }}
    </h6>
    <p class="card-text">
        <span class="{{ $textClass }}">{{ $formattedValue }}</span>
        @isset($allowance->relatedHolder)
            - {{ $allowance->relatedHolder->name }}
        @endisset
    </p>
    @isset($allowance->description)
        <p class="card-text">{{ $allowance->description }}</p>
    @endisset
    <div class="col align-self-end">
        <div class="btn-group" role="group" aria-label="Ativities">
            <x-buttons.table.show href="{{ route('allowances.show', $allowance->id) }}" />
            <x-buttons.table.edit href="{{ route('allowances.edit', $allowance->id) }}" />
            <x-buttons.table.delete action="{{ route('allowances.destroy', $allowance->id) }}" />
        </div>
    </div>
</x-cards.card>

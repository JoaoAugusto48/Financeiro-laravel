<x-cards.card>
    <h5 class="card-title">{{ $accountHolder->name }}</h5>
    {{-- <p class="card-text">{{ $accountHolder->category?->name }}</p> --}}
    <div class="col align-self-end">
        <x-action.button.stretched-link url="{{ route('holders.show', $accountHolder->id) }}"/>
        {{-- <div class="btn-group" role="group" aria-label="Ativities">
            <x-action.button.group.show url="{{ route('holders.show', $accountHolder->id) }}"/>
            <x-action.button.group.edit url="{{ route('holders.edit', $accountHolder->id) }}"/>
            <x-action.button.group.delete action="{{ route('holders.destroy', $accountHolder->id) }}" :object="$accountHolder"/>
        </div> --}}
    </div>
</x-cards.card>

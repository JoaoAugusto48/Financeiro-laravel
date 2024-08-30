<x-cards.card>
    <h5 class="card-title">{{ $title }}</h5>
    <p class="card-text">{{ $slot }}</p>
    <div class="col align-self-end">
        <x-action.button is-link="true" url="{{ $href }}" class="primary">
            <x-slot:label>
                <i class="bi bi-box-arrow-in-right"></i> {{ __('buttons.access') }}
            </x-slot:label>
        </x-action.button>
    </div>
</x-cards.card>
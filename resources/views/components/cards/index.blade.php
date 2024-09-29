<x-cards.card>
    <h5 class="card-title">{{ $title }}</h5>
    <p class="card-text">{{ $slot }}</p>
    <div class="col align-self-end">
        <x-action.button.stretched-link :url="$href" class="primary btn-sm">
            <x-slot:icon>
                <i class="bi bi-box-arrow-in-right"></i>
            </x-slot:icon>
            <x-slot:label>
                {{ __('buttons.access') }}
            </x-slot:label>
        </x-action.button.stretched-link>
    </div>
</x-cards.card>
<x-cards.card>
    <h5 class="card-title">{{ $title }}</h5>
    <p class="card-text">{{ $slot }}</p>
    <div class="col align-self-end">
        <a href="{{ $href }}" class="btn btn-primary">
            <i class="bi bi-box-arrow-up-left"></i> Acessar
        </a>
    </div>
</x-cards.card>
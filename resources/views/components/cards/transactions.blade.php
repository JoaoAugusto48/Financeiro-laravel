@php
    $color = ($transaction->kindTransaction == $kindDeposit) ? 'success' : 'danger';
@endphp
<x-cards.card class="border-{{ $color }}">
    <h5 class="card-title"><span class="text-{{ $color }}">R$ {{ $transaction->value }}</span> - {{ $transaction->account->accountHolder->name }}</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">
        {{ $transaction->dateTransaction }} - {{ $transaction->account->bank->name }}
    </h6>
    <p class="card-text">
        <span class="text-{{ $color }}">{{ $transaction->kindTransaction }}</span>
        @isset($transaction->relatedHolder->name)
            - {{ $transaction->relatedHolder->name }}
        @endisset
    </p>
    @isset($transaction->description)
        <p class="card-text">{{ $transaction->description }}</p>
    @endisset
    <div class="col align-self-end">
        <div class="btn-group" role="group" aria-label="Ativities">
            <x-buttons.table.show href="{{ route('transactions.show', $transaction->id) }}"/>
            <x-buttons.table.edit href="{{ route('transactions.edit', $transaction->id) }}"/>
            <x-buttons.table.delete action="{{ route('transactions.destroy', $transaction->id) }}"/>
        </div>
    </div>
</x-cards.card>
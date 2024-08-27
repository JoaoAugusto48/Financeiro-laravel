<x-cards.card>
    <h5 class="card-title">{{ $accountHolder->name }}</h5>
    <p class="card-text">
        Transações: {{ $accountHolder->transactions->count() }}<br/>
        Mensalidades: {{ $accountHolder->allowances->count() }}<br/>
        Contas: {{ $accountHolder->accounts->count() }}
    </p>
    <div class="col align-self-end">
        <div class="btn-group" role="group" aria-label="Ativities">
            <x-buttons.table.show href="{{ route('holders.show', $accountHolder->id) }}"/>
            <x-buttons.table.edit href="{{ route('holders.edit', $accountHolder->id) }}"/>
            <x-buttons.table.delete action="{{ route('holders.destroy', $accountHolder->id) }}"/>
        </div>
    </div>
</x-cards.card>

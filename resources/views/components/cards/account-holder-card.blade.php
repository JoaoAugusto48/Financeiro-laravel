<x-cards.card>
    <h5 class="card-title">{{ $accountHolder->name }}</h5>
    <p class="card-text">
        Transações: {{ $accountHolder->transactions->count() }}<br/>
        Mensalidades: {{ $accountHolder->allowances->count() }}<br/>
        Contas: {{ $accountHolder->accounts->count() }}
    </p>
    <div class="col align-self-end">
        <div class="btn-group" role="group" aria-label="Ativities">
            <x-action.button.group.button-show url="{{ route('holders.show', $accountHolder->id) }}"/>
            <x-action.button.group.button-edit url="{{ route('holders.edit', $accountHolder->id) }}"/>
            <x-action.button.group.button-delete action="{{ route('holders.destroy', $accountHolder->id) }}" :object="$accountHolder"/>
        </div>
    </div>
</x-cards.card>

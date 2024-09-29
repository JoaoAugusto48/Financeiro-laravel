<x-modal.modal id="{{ $id }}">
    <x-slot:title>Tem certeza que deseja remover essa transação?</x-slot:title>
    <x-slot:body>
        <div class="row">
            <div class="col">
                <p class="text-body">Value: <x-helper.currency-text value="{{ $transaction->value }}"/></p>
            </div>
            <div class="col">
                <p class="text-body">Kind: {{ $transaction->kindTransaction }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p class="text-body">Account: <x-helper.text.account :account="$transaction->account"/></p>
            </div>
            <div class="col-12">
                <p class="text-body">
                    Related: {{ $transaction->relatedHolder?->name ?? '-' }}
                </p>
            </div>
            <div class="col-12">
                <p class="text-body">
                    Description: {{ $transaction->description ?? '-' }}
                </p>
            </div>
        </div>
    </x-slot:body>
    <x-slot:buttons>
        <form action="{{ route('transactions.destroy', $transaction->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <x-action.button label="Remove" is-link="false" type="submit" class="danger"/>
        </form>
    </x-slot:buttons>
</x-modal.modal>
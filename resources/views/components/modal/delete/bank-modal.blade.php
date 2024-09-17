<x-modal.modal id="{{ $id }}">
    <x-slot:title>Tem certeza que deseja remover o banco "{{ $bank->name }}"?</x-slot:title>
    <x-slot:body>
        <div class="row">
            <div class="col">
                <p class="text-body">Name: {{ $bank->name }}</p>
            </div>
            <div class="col">
                <p class="text-body">Number: {{ $bank->number }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="text-body">Abbrevitation: {{ $bank->abbreviation }}</p>
            </div>
        </div>
    </x-slot:body>
    <x-slot:buttons>
        <form action="{{ route('banks.destroy', $bank->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <x-action.button label="Remove" is-link="false" type="submit" class="danger"/>
        </form>
    </x-slot:buttons>
</x-modal.modal>
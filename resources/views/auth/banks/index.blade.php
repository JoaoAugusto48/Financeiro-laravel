<x-layout title="Bank" page-name="Bank">

    <x-helper.alert :$messages/>
    
    <div class="row mb-2">
        <div class="col">
            <x-action.button.create url="{{ route('banks.create') }}"/>
        </div>

        @if ($banks->links()->paginator->lastPage() != 1)
            <div class="col">
                {{ $banks->links() }}
            </div>
        @endif
        
        <div class="col">
            <x-action.dropdown-filter :options="[
                ['label' => 'Nome', 'sort' => 'name', 'type' => 'asc'],
                ['label' => 'Número', 'sort' => 'number', 'type' => 'asc'],
                ['label' => 'Abreviação', 'sort' => 'abbreviation', 'type' => 'asc']
            ]" :$currentSort />
        </div>
    </div>

    {{-- <div class="row">
        <div class="row justify-content-center m-2">
            <div class="col-md-6">
                <x-banks.search :action="route('banks.search')" />
            </div>
        </div>
    </div> --}}

    {{-- <div class="row">
        {{ $banks->links() }}
    </div> --}}
    
    <div class="row row-cols-4">
        @foreach ($banks as $bank)
            <x-cards.bank-card :$bank/>
        @endforeach
    </div>

    <div class="row">
        {{ $banks->links() }}
    </div>

</x-layout>

<x-layout title="Bank" page-name="Bank">

    <x-helper.alert :$messages/>
    
    <div class="row mb-2">
        <div class="col">
            <x-action.button.create url="{{ route('banks.create') }}"/>
        </div>
    </div>

    <div class="row mb-2">
        {{-- <div class="row justify-content-center m-2">
            <div class="col-md-6">
                <x-banks.search :action="route('banks.search')" />
            </div>
        </div> --}}
        <div class="col">
            <div class="d-flex justify-content-end">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-filter"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Nome</a></li>
                        <li><a class="dropdown-item" href="#">Número</a></li>
                        <li><a class="dropdown-item" href="#">Abreviação</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        {{ $banks->links() }}
    </div>
    
    <div class="row row-cols-4">
        @foreach ($banks as $bank)
            <x-cards.bank-card :$bank/>
        @endforeach
    </div>

    <div class="row">
        {{ $banks->links() }}
    </div>

</x-layout>

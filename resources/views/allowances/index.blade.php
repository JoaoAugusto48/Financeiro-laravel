<x-layout title="Allowance">

    <div class="row mb-2">
        <div class="col">
            <x-buttons.create href="#" />
        </div>
    </div>

    <div class="row row-cols-4">
        @foreach ($allowances as $allowance)
            <div class="row m-1">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $allowance->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">{{ $allowance->account->accountHolder->name }}
                        </h6>
                        <p class="card-text">{{ $allowance->kindTransaction }} - {{ $allowance->value }}</p>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <button type="button" class="btn btn-info"><i class="bi bi-eye"></i></button>
                            <button type="button" class="btn btn-warning"><i class="bi bi-pencil-square"></i></button>
                            <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>

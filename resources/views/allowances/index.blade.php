<x-layout title="Allowance">

    <x-alerts.danger :error="$error"/>
    <x-alerts.success :success="$success"/>

    <div class="row mb-2">
        <div class="col">
            <x-buttons.create :href="route('allowances.create')" />
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
                        <div class="btn-group" role="group" aria-label="Ativities">
                            <x-buttons.table.show href="{{ route('allowances.show', $allowance->id) }}" />
                            <x-buttons.table.edit href="{{ route('allowances.edit', $allowance->id) }}" />
                            <x-buttons.table.delete action="{{ route('allowances.destroy', $allowance->id) }}" />
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>

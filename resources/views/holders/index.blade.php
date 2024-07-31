<x-layout title="Account Holder">
    
    <x-alerts.danger :error="$error"/>
    <x-alerts.success :success="$success"/>

    <div class="row mb-2">
        <div class="col">
            <x-buttons.create :href="route('holders.create')" />
        </div>
    </div>

    <div class="row row-cols-4">
        @foreach ($accountHolders as $accountHolder)
            <div class="row m-1">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $accountHolder->name }}</h5>
                        <div class="btn-group" role="group" aria-label="Ativities">
                            <x-buttons.table.show href="{{ route('holders.show', $accountHolder->id) }}" />
                            <x-buttons.table.edit href="{{ route('holders.edit', $accountHolder->id) }}" />
                            <x-buttons.table.delete action="{{ route('holders.destroy', $accountHolder->id) }}" />
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>

<x-layout title="Allowance" page-name="Allowance">

    <x-helper.alert :$messages/>

    <div class="row mb-2">
        <div class="col">
            <x-action.button.button-create url="{{ route('allowances.create') }}"/>
        </div>
    </div>

    <div class="row">
        {{ $allowances->links() }}
    </div>

    <div class="row row-cols-4">
        @foreach ($allowances as $allowance)
            <x-cards.allowance-card :allowance="$allowance" />
        @endforeach
    </div>
</x-layout>

<x-layout title="Novo Holder" page-name="Holder">

    <form action="{{ route('holders.create') }}" method="post">
        @csrf
        
        <div class="row">
            <div class="col">
                <div class="hstack gap-2">
                    <x-action.button.back/>
                    <div class="vr"></div>
                    <x-action.button.save/>
                </div>
            </div>
        </div>

        <x-holders.form action="{{ route('holders.store') }}"
                        go-back="{{ route('holders.index') }}"/>
    </form>
</x-layout>
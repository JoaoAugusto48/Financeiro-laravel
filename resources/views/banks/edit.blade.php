<x-layout page-name="Bank">
    <x-slot:title>
        Atualizar '{{ $bank->name }}'
    </x-slot:title>

    <form action="{{ route('banks.update', $bank) }}" method="post">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col">
                <div class="hstack gap-2">
                    <x-action.button.back/>
                    <div class="vr"></div>
                    <x-action.button.save/>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-7">
                <x-banks.form :$bank/>
            </div>
        </div>
   
    </form>
</x-layout>
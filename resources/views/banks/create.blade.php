<x-layout title="Novo Banco" page-name="Bank">

    <form action="{{ route('banks.store') }}" method="post">
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

        <div class="row">
            <div class="col-7">
                <x-banks.form action="{{ route('banks.store') }}"
                            go-back="{{ route('banks.index') }}"/>
            </div>

            <div class="col-5">
                <x-tables.data-table id="banks" class="table table-hover text-center table-responsive" >
                    <x-slot:thead>
                        <tr>
                            <th scope="col">Número</th>
                            <th scope="col">Sigla</th>
                            <th scope="col text-start">Nome</th>
                        </tr>
                    </x-slot:thead>
                    <x-slot:tbody>
                        @foreach ($banks as $key => $bank)
                        <tr>
                            <th class="col-2" scope="row">{{ $bank->number }}</th>
                            <td class="col-2">{{ $bank->abbreviation }}</td>
                            <td class="col-6 text-start">{{ $bank->name }}</td>
                        </tr>
                        @endforeach
                    </x-slot:tbody>
                </x-tables.data-table>

            </div>
        </div>
    </form>


</x-layout>
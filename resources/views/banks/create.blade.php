<x-layout title="Novo Banco" page-name="Bank">

    <form action="{{ route('banks.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col">
                <div class="hstack gap-2">
                    <x-action.button.back url="{{ route('banks.index') }}"/>
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
                <table id="example" class="table table-hover text-center table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">Número</th>
                            <th scope="col">Sigla</th>
                            <th scope="col text-start">Nome</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($banks as $bank)
                        <tr>
                            <th class="col-2" scope="row">{{ $bank->number }}</th>
                            <td class="col-2">{{ $bank->abbreviation }}</td>
                            <td class="col-6 text-start">{{ $bank->name }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
            </div>
        </div>
    </form>



@push('scripts')
<!-- DataTables JS -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
    
@endpush

</x-layout>

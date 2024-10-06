<table id="{{ $id }}" class="table table-hover text-center table-responsive">
    <thead>
        {{ $thead }}
    </thead>
    <tbody class="table-group-divider">
        {{ $tbody }}
    </tbody>
</table>

@push('header')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
@endpush

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#'+@json($id)).DataTable({
                paging: {{ $paging }},         // Desativar paginação
                searching: {{ $searching }},      // Desativar barra de pesquisa
                info: {{ $info }},           // Desativar informações de registros
                ordering: {{ $ordering }},        // Manter ordenação habilitada
                lengthChange: {{ $lengthChange }},   // Desativar mudança de quantidade de registros exibidos
                autoWidth: {{ $autoWidth }},       // Desativar largura automática para evitar sobreposição
                scrollX: {{ $scrollX }},         // Desativar scroll 
            });
        });
    </script>
@endpush
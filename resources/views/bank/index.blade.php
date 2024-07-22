<x-layout title="Bank">

    <div class="row">
        <div class="col">
            <x-buttons.create :href="route('banks.create')" />
        </div>
    </div>

    <div class="row">
        <div class="col">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">Next {{ $perPage }}</a></li>
                </ul>
              </nav>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-10">
            <table class="table table-hover align-middle">
                <caption>List of Banks</caption>
                <tbody>
                    @foreach ($banks as $bank)
                        <tr>
                            <th scope="row" class="text-center">{{ $bank->number }}</th>
                            <td>{{ $bank->name }}</td>
                            <td>{{ $bank->abbreviation }}</td>
                            <td>
                                <div class="hstack gap-1">
                                    <div class="ms-auto">
                                        <x-buttons.table.show :href="route('banks.show', $bank->id)"/>
                                    </div>
                                    <div class="vr"></div>
                                    <x-buttons.table.edit :href="route('banks.edit', $bank->id)"/>
                                    <div class="vr"></div>
                                    <x-buttons.table.delete href=""/>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-layout>

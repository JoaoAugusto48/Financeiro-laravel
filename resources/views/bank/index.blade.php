<x-layout title="Bank">

    <div class="row">
        <div class="col">
            <x-buttons.create :href="route('banks.create')" />
        </div>
    </div>

    <div class="row justify-content-center m-2">
        <div class="col-md-6">
            <form class="d-flex mt-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>

    <div class="row">
        {{ $banks->links() }}
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

    {{-- <div class="row">
        {{ $banks->links() }}
    </div> --}}

</x-layout>

<x-layout title="Bank" page-name="Bank">

    <x-helper.alert :$messages/>
    
    <div class="row">
        <div class="col">
            <x-action.button.button-create url="{{ route('banks.create') }}"/>
        </div>
    </div>

    {{-- <div class="row justify-content-center m-2">
        <div class="col-md-6">
            <x-banks.search :action="route('banks.search')" />
        </div>
    </div> --}}

    <div class="row">
        {{ $banks->links() }}
    </div>
    
    <div class="row justify-content-center mt-2">
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
                                        <x-action.button.group.button-show :url="route('banks.show', $bank->id)"/>
                                    </div>
                                    <x-action.button.group.button-edit :url="route('banks.edit', $bank->id)"/>
                                    <x-action.button.group.button-delete :action="route('banks.destroy', $bank->id)" :object="$bank"/>
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

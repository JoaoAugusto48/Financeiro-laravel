<x-layout title="Bank">

    <div class="clearfix">
        <p class="h1 float-start">Bank</p>
        <button type="button" class="btn btn-info btn float-end">Create</button>
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
                                <div class="hstack gap-2">
                                    <div class="ms-auto">
                                        <button type="button" class="btn btn-info btn-sm">About</button>
                                    </div>
                                    <div class="vr"></div>
                                    <div class="">
                                        <button type="button" class="btn btn-danger btn-sm">Remove</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-layout>

<x-layout title="Bank">

    <p class="h1">Your Bank's</p>
    
    <table class="table align-middle">
        <caption>List of Banks</caption>
        <tbody>
            @foreach ($banks as $bank)
                <tr>
                    <th scope="row">{{ $bank->number }}</th>
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

</x-layout>

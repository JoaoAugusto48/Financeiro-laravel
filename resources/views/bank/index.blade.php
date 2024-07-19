<x-layout title="Bank">

    <div class="row">
        <div class="col">
            <x-buttons.create :href="route('banks.create')" />
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
                                <div class="hstack gap-2">
                                    <div class="ms-auto">
                                        <x-buttons.show :href="route('banks.show', $bank->id)"/>
                                    </div>
                                    <div class="vr"></div>
                                    <x-buttons.edit :href="route('banks.edit', $bank->id)"/>
                                    <div class="vr"></div>
                                    <x-buttons.delete/>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-layout>

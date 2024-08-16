<x-form.select.select label="{{ $label }}" required="{{ $required }}" name="{{ $name }}">
    @foreach ($banks as $bank)
        <option value="{{ $bank->id }}" {{ ($selected == $bank->id) ? 'selected' : ((old($name) == $bank->id) ? 'selected' : '') }}>
            {{ $bank->number }} | {{ $bank->name }} - {{ $bank->abbreviation }}
        </option>
    @endforeach
</x-form.select.select>
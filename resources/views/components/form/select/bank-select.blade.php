<x-form.select label="{{ $label }}" required="{{ $required }}" name="{{ $name }}" selected="{{ $selected }}">
    @foreach ($banks as $bank)
        <option value="{{ $bank->id }}" {{ ($selected == $bank->id) ? 'selected' : ((old($name) == $bank->id) ? 'selected' : '') }}>
            {{ $bank->number }} | {{ $bank->name }} - {{ $bank->abbreviation }}
        </option>
    @endforeach
</x-form.select>
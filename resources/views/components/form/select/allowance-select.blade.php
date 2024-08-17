<x-form.select label="{{ $label }}" required="{{ $required }}" name="{{ $name }}">
    @foreach ($allowances as $allowance)
        <option value="{{ $allowance->id }}" {{ ($selected == $allowance->id) ? 'selected' : ((old($name) == $allowance->id) ? 'selected' : '') }}>
            {{ $allowance->value }}
        </option>
    @endforeach
</x-form.select>
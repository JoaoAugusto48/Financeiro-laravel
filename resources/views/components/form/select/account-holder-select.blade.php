<x-form.select.select label="{{ $label }}" required="{{ $required }}" name="{{ $name }}">
    @foreach ($accountHolders as $accountHolder)
        <option value="{{ $accountHolder->id }}" {{ ($selected == $accountHolder->id) ? 'selected' : ((old($name) == $accountHolder->id) ? 'selected' : '') }}>
            {{ $accountHolder->name }}
        </option>
    @endforeach
</x-form.select.select>
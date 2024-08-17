<x-form.select label="{{ $label }}" required="{{ $required }}" name="{{ $name }}" selected="{{ $selected }}">
    @foreach ($accountHolders as $accountHolder)
        <option value="{{ $accountHolder->id }}" {{ ($selected == $accountHolder->id) || (old($name) == $accountHolder->id) ? 'selected' : '' }}>
            {{ $accountHolder->name }}
        </option>
    @endforeach
</x-form.select>
<x-form.select label="{{ $label }}" required="{{ $required }}" name="{{ $name }}" selected="{{ $selected }}">
    @foreach ($accounts as $account)
        <option value="{{ $account->id }}" {{ ($selected == $account->id) ? 'selected' : ((old($name) == $account->id) ? 'selected' : '') }}>
            {{ $account->accountNumber }} | {{ $account->accountHolder->name }} - {{ $account->bank->abbreviation }}    
        </option>
    @endforeach
</x-form.select>
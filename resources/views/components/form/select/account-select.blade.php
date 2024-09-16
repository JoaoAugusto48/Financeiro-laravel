<x-form.select label="{{ $label }}" required="{{ $required }}" name="{{ $name }}" selected="{{ $selected }}">
    @foreach ($accounts as $account)
        <option value="{{ $account->id }}" {{ ($selected == $account->id) ? 'selected' : ((old($name) == $account->id) ? 'selected' : '') }}>
            <x-helper.text.account :account="$account"/>
        </option>
    @endforeach
</x-form.select>
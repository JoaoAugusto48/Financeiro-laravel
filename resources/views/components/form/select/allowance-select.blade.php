<x-form.select label="{{ $label }}" required="{{ $required }}" name="{{ $name }}" selected="{{ $selected }}">
    @foreach ($allowances as $allowance)
        <option value="{{ $allowance->id }}" 
            data-value="{{ $allowance->value }}" 
            data-kind="{{ $allowance->kindTransaction }}" 
            data-account="{{ $allowance->account->accountHolder->name }}"
            data-related-holder="{{ $allowance->relatedHolder?->name }}"
            {{ ($selected == $allowance->id) ? 'selected' : ((old($name) == $allowance->id) ? 'selected' : '') }}>
            <x-helper.text.allowance :allowance="$allowance"/>
        </option>
    @endforeach
</x-form.select>
<x-form.select label="{{ $label }}" required="{{ $required }}" name="{{ $name }}" selected="{{ $selected }}">
    @foreach ($allowances as $allowance)
        <option value="{{ $allowance->id }}" 
            data-value="{{ $allowance->value }}" 
            data-kind="{{ $allowance->kindTransaction }}" 
            data-account="{{ $allowance->account->accountHolder->name }}"
            data-related-holder="{{ $allowance->relatedHolder?->name }}"
            {{ ($selected == $allowance->id) ? 'selected' : ((old($name) == $allowance->id) ? 'selected' : '') }}>
            {{ $allowance->title }} - R$ {{ $allowance->value }} - {{ $allowance->kindTransaction }} - {{ $allowance->account->accountHolder->name }} @isset($allowance->relatedHolder) - {{ $allowance->relatedHolder->name }} @endisset
        </option>
    @endforeach
</x-form.select>
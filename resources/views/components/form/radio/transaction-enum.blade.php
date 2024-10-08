<x-form.radio name="{{ $name }}" required="{{ $required }}">
    <x-slot:label>{{ $label }}</x-slot:label>
    
    @foreach ($transactionEnum as $transaction)
        <div class="form-check">
            <input class="form-check-input" 
                   type="radio"
                   name="{{ $name }}"
                   id="{{ $name . $transaction->value }}"
                   value="{{ $transaction->value }}"
                   {{ ($checked == $transaction->name || old($name) == $transaction->value) ? 'checked' : '' }}
                   @if ($required) required @endif>
            <label class="form-check-label" for="{{ $name . $transaction->value }}">
                {{ $transaction->value }}
            </label>
        </div>
    @endforeach
</x-form.radio>
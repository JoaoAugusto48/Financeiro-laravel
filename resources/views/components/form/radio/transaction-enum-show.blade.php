<x-form.radio.show label="{{ $label }}">
    @foreach ($transactionEnum as $transaction)
        <div class="form-check">
            <input class="form-check-input" 
            type="radio"
                   {{ ($checked == $transaction->name) ? 'checked' : '' }}
                   disabled>
            <label class="form-check-label" for="{{ $transaction->value }}">
                {{ $transaction->value }}
            </label>
        </div>
    @endforeach
</x-form.radio.show>
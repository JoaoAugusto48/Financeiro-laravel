<x-form.input.input-group 
    label="{{ $label }}" 
    name="{{ $name }}" 
    value="{{ $value }}" 
    required="{{ $required }}" 
    group="{{ $group }}"
    inputmode="numeric"/>

@push('scripts')
<script>
    const moneyInput = document.getElementById('{{ $name }}');

    moneyInput.addEventListener('input', (event) => {
        let value = event.target.value.replace(/\D/g, '').replace(/^0+/, '');

        if (value.length === 0) {
            value = '0.00';
        } else if (value.length === 1) {
            value = '0.0' + value;
        } else if (value.length === 2) {
            value = '0.' + value;
        } else {
            value = value.slice(0, -2) + '.' + value.slice(-2);
        }

        event.target.value = value;
    });
</script>
@endpush
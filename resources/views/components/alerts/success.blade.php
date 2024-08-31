@isset($success)
    <div id="success-message" class="alert alert-success mb-2">
        {{ $success }}
    </div>
@endisset

@push('scripts')
<script>
    // Espera o documento carregar completamente
    document.addEventListener("DOMContentLoaded", function() {
        const successMessage = document.getElementById('success-message');
        
        setTimeout(() => {
            successMessage.style.transition = "opacity 1s ease";
            successMessage.style.opacity = "0";
            
            setTimeout(() => {
                successMessage.remove();
            }, 1000);
        }, 5000); // 5 segundos de espera antes de começar a desaparecer
    });
</script>
@endpush
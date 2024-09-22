@isset($warning)
    <div id="warning-message" class="alert alert-warning mb-2">
        {{ $warning }}
    </div>
@endisset

@push('scripts')
<script>
    // Espera o documento carregar completamente
    document.addEventListener("DOMContentLoaded", function() {
        const successMessage = document.getElementById('warning-message');
        
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
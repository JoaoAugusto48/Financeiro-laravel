<form action="{{ $action }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger btn-sm">
        <i class="bi bi-trash3"></i> {{ $slot }}
    </button>
</form>
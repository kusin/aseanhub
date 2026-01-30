@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('click', function(e) {
        const btn = e.target.closest('[data-confirm]');
        if (!btn) return;
        e.preventDefault();

        const form = btn.closest('form');
        if (!form) return;

        Swal.fire({
            icon: btn.dataset.icon ?? '',
            title: btn.dataset.title ?? '',
            text: btn.dataset.text ?? '',
            showCancelButton: true,
            reverseButtons: true,
            confirmButtonText: btn.dataset.confirmText ?? '',
            confirmButtonColor: btn.dataset.confirmColor ?? '',
            cancelButtonText: 'Back',
            cancelButtonColor: '#6c757e'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    });
</script>
@endpush

{{-- sweetalert2 2.11 --}}
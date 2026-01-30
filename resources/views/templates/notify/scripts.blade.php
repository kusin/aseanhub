@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/simple-notify@0.5.5/dist/simple-notify.min.js"></script>
    <script>
        (function() {

            const el = document.getElementById('notify-data');
            if (!el) return;

            new Notify({
                status: el.dataset.status,
                text: el.dataset.text,
                effect: 'slide',
                speed: 500,
                showIcon: true,
                showCloseButton: true,
                autoclose: true,
                autotimeout: 4000,
                gap: 20,
                distance: 20,
                position: 'right top'
            });
        })();
    </script>
@endpush

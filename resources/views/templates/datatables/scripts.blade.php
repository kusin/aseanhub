@push('scripts')
<script src="{{ asset('adminlte/adminlte-3.2.0/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('adminlte/adminlte-3.2.0/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('adminlte/adminlte-3.2.0/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('adminlte/adminlte-3.2.0/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script>
    $(function() {
        $('.datatables').DataTable({
            responsive: false,
            autoWidth: false,
            ordering: true,
            paging: true,
            searching: true,
            lengthChange: true,
            pageLength: 25,
            language: {
                search: "Search",
                lengthMenu: "Show _MENU_ entries",
                zeroRecords: "No matching data found",
                info: "Showing _START_ to _END_ of _TOTAL_ entries",
                infoEmpty: "No data available",
                paginate: {
                    "previous": "<",
                    "next": ">",
                }
            }
        });
    });
</script>
@endpush

{{-- datatables 1.11.4 --}}
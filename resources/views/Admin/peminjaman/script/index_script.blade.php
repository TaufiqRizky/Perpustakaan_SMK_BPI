@section('js')
    <script type="text/javascript" src="{{ URL::to('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('assets/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
    <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- DataTables -->
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.datatables.net/1.10.10/js/dataTables.bootstrap.min.js"></script>

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!-- App scripts -->
    <script>
    // $(document).ready(function() {

    //     loadData();

    //     function loadData()
    //     {
    //         $(function() {
    //         var table = $("#users").DataTable({
    //             processing: true,
    //             serverSide: true,
    //             ajax: '{!! URL::route("datatables-peminjaman") !!}',
    //             columns: [
    //                 {data: 'id', name: 'peminjaman.id'},
    //                 {data: 'member_barcode', name: 'peminjaman.member_barcode', sClass: 'center-align'},
    //                 {data: 'tgl_pinjam', name: 'peminjaman.tgl_pinjam', sClass: 'center-align'},
    //                 {data: 'tgl_kembali', name: 'peminjaman.tgl_kembali', sClass: 'center-align'},
    //                 {data: 'created_at', name: 'peminjaman.created_at', sClass: 'center-align'},
    //                 {data: 'action', name: 'action', class: 'center-align', searchable: false, orderable: false}
    //             ]
    //         });
    //         });
    //     }
    // });
    $(function() {
        var table = $("#peminjaman-table").DataTable({
        processing: true,
        serverSide: true,
        deferRender: true,
        ajax: {
        url: '{{ URL("datatables") }}',
        method: 'GET',
        },

        columns: [
        { data: null, 'searchable': false , render: function (data, type, row, meta) {
        return meta.row + meta.settings._iDisplayStart + 1;
        } },
        { data: 'id'},
        { data: 'member_barcode' },
        { data: 'tgl_pinjam' },
        { data: 'tgl_kembali' },
        { data: 'created_at' },
        ],
        scrollCollapse: true,

        columnDefs: [ {
        sortable: true,
        "class": "index",
        targets: 0
        }],
        order: [[ 1, 'asc' ]],
        fixedColumns: true

        });

        });

    </script>
@endsection
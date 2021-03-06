@extends('layouts.admin')

@section('content')

<!-- Striped Rows -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Reports
                                
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li>
                                    <a href="javascript:void(0);" data-toggle="cardloading" title="Reload" data-loading-effect="timer">
                                        <i class="material-icons">loop</i>
                                    </a>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-bordered table-hovered table-striped js-sweetalert" id="report">
                                <thead>
                                    <tr>
                                        <th align="center">No</th>
                                        <th align="center">Nama</th>
                                        <th align="center">Judul Buku</th>
                                        <th align="center">Tanggal Pinjam</th>
                                        <th align="center">Tanggal Kembali</th>
                                        <th align="center">Total Denda</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($peminjaman as $row => $value)
                                    <tr class="item{{$value->id}}">
                                        <th scope="row">{{ $row+1 }}</th>
                                        <td>{{ $value->nama }}</td>
                                        <td>{{ $value->judul }}</td>
                                        <td>{{ $value->tgl_pinjam }}</td>
                                        <td>{{ $value->tgl_kembali }}</td>
                                        <td>{{ $value->total_denda }}</td>
                                    </tr>
                                  
                               @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Striped Rows -->


@endsection
@section('js')

<script type="text/javascript">
var table;
      $(document).ready(function(){
       @foreach($peminjaman as $row => $value)  
       $("#barcode_buku{{ $row+1 }}").barcode("{{ $value->buku_barcode }}", "codabar", { barHeight:50});     
        @endforeach
   table = $('#report').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
   });
});
</script>




@endsection

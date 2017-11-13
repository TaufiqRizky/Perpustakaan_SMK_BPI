@extends('layouts.admin')

@section('content')

<!-- Striped Rows -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Master Buku
                                
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
                            <table class="table table-bordered table-hovered table-striped js-sweetalert" id="buku">
                                <thead>
                                    <tr>
                                        <th align="center">No</th>
                                        <th align="center">Barcode</th>
                                        <th align="center">Judul</th>
                                        <th align="center">Pengarang</th>
                                        <th align="center">Penerbit</th>
                                        <th align="center">Jenis</th>
                                        <th align="center">Genre</th>
                                        <th align="center">Sinopsis</th>
                                        <th align="center">Stok</th>
                                        <th align="center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($buku as $row => $value)
                                    <tr class="item{{$value->id}}">
                                        <th scope="row">{{ $row+1 }}</th>
                                        <td><div id="barcode{{ $row+1 }}"></div></td>
                                        <td>{{ $value->judul }}</td>
                                        <td>{{ $value->pengarang }}</td>
                                        <td>{{ $value->penerbit }}</td>
                                        <td>{{ $value->jenis }}</td>
                                        <td>{{ $value->genre }}</td>
                                        <td>{{ str_limit($value->sinopsis,50) }}</td>
                                        <td>{{ $value->stok }}</td>
                                        <td>
                                            
                                            <a class="btn btn-primary waves-effect" data-type="" href="{{ url('buku/'.$value->id.'/edit') }}" ><i class="material-icons">edit</i></a>
                                        
                                            <button class="btn btn-danger waves-effect" data-id="{{$value->id}}" data-type="D_buku"><i class="material-icons">delete</i></button>
                                        </td>
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
       @foreach($buku as $row => $value)
       $("#barcode{{ $row+1 }}").barcode("{{ $value->barcode }}", "ean13", { barHeight:50});     
        @endforeach
   table = $('#buku').DataTable();
});
</script>


@endsection

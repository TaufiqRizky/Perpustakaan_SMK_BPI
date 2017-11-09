@extends('layouts.admin')

@section('content')

<!-- Striped Rows -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Master Karyawan
                                
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
                            <table class="table table-bordered table-hovered table-striped js-sweetalert" id="karyawan">
                                <thead>
                                    <tr>
                                        <th align="center">No</th>
                                        <th align="center">NIK</th>
                                        <th align="center">Nama</th>
                                        <th align="center">Jabatan</th>
                                        <th align="center">No. Telepon</th>
                                        <th align="center">Alamat</th>
                                        <th align="center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($karyawan as $row => $value)
                                    <tr class="item{{$value->id}}">
                                        <th scope="row">{{ $row+1 }}</th>
                                        <td><div id="nik{{ $row+1 }}"></div></td>
                                        <td>{{ $value->nama }}</td>
                                        <td>{{ $value->jabatan }}</td>
                                        <td>{{ $value->tlp }}</td>
                                        <td>{{ $value->alamat }}</td>
                                        <td>
                                            
                                            <a class="btn btn-success waves-effect" data-type="" href="{{ url('karyawan/'.$value->id.'/detail') }}" ><i class="material-icons">remove_red_eye</i></a>

                                            <a class="btn btn-primary waves-effect" data-type="" href="{{ url('karyawan/'.$value->id.'/edit') }}" ><i class="material-icons">edit</i></a>
                                        
                                            <button class="btn btn-danger waves-effect" data-id="{{$value->id}}" data-type="D_karyawan"><i class="material-icons">delete</i></button>

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
       @foreach($karyawan as $row => $value)
       $("#nik{{ $row+1 }}").barcode("{{ $value->nik }}", "codabar", { barHeight:50});     
        @endforeach
   table = $('#karyawan').DataTable();
});
</script>


@endsection

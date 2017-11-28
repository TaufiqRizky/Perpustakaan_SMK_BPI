@extends('layouts.admin')

@section('content')
    <div class="block-header">
        <h2>Detail Peminjaman</h2>
    </div>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>Detail Peminjaman</h2>
                    <ul class="header-dropdown m-r--5">
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
                <div class="body">
                    <div class="form-group form-float">
                        <div class="col-sm-3">
                            <div class="form-label"><b>Nama Peminjam</b></div>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-control">{{$detail->nama}}</div>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="col-sm-3">
                            <div class="form-label"><b>NIS</b></div>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-control">{{$detail->barcode}}</div>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="col-sm-3">
                            <div class="form-label"><b>Kelas</b></div>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-control">{{$detail->kelas}}</div>
                        </div>
                    </div>
                    
                    <div class="form-group form-float">
                        <div class="col-sm-3">
                            <div class="form-label"><b>Unit</b></div>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-control">{{$detail->unit}}</div>
                        </div>
                    </div>

                    <div class="form-group form-float">
                        <div class="col-sm-3">
                            <div class="form-label"><b>Tanggal Peminjaman</b></div>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-control">{{$detail->tgl_pinjam}}  <b>sd</b>  {{$detail->tgl_kembali}}</div>
                        </div>
                    </div>
                    
                    <div class="form-group form-float">
                        <div class="col-sm-3">
                            <div class="form-label"><b>Buku Yang di Pinjam</b></div>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-control">
                                @foreach($buku as $value)
                                    <li>{{$value->judul}}</li>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('admin-index-peminjaman') }}" class="btn btn-success waves-effect"> Kembali </a>
                </div>
            </div>
        </div>
    </div>

@endsection

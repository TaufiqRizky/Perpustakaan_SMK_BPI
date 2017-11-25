@extends('layouts.admin')

@section('content')

<div class="block-header">
    <h2>Edit Karyawan</h2>
</div>

<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Input Forms</h2>
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
                           <form action="{{ url('/karyawan/'.$karyawan->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama" id="nama" value="{{ $karyawan->nama }}" required>
                                        <label class="form-label">Nama</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="tlp" id="tlp" value="{{ $karyawan->tlp }}" required>
                                        <label class="form-label">No. Telepon</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="jabatan" id="jabatan" value="{{ $karyawan->jabatan }}" required>
                                        <label class="form-label">Jabatan</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="alamat" cols="30" rows="5" class="form-control no-resize" id="alamat" >{{ $karyawan->alamat }} </textarea>
                                        <label class="form-label">Alamat</label>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" >Update</button>
                        
                        </div>
                    </div>
                </div>
                </form>
            </div>


@endsection

@extends('layouts.admin')

@section('content')

<div class="block-header">
    <h2>Tambah Member</h2>
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
                           <form action="{{ url('member/store') }}" enctype="multipart/form-data" method="POST">
                            {!! csrf_field() !!}
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="file" class="form-control" name="foto" id="foto" accept="image/*" required>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="barcode" id="barcode" required>
                                        <label class="form-label">NIS</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama" id="nama" required>
                                        <label class="form-label">Nama</label>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                <div class="col-sm-12">
                                    <select class="form-control show-tick" name="jk" id="jk">
                                        <option value="">-- Select Jenis Kelamin --</option>
                                        <option value="L">L</option>
                                        <option value="P">P</option>
                                        <div class="Ojenis">
                                            
                                        </div>
                                    </select>
                                </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="usia" id="usia" required>
                                        <label class="form-label">Usia</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="kelas" id="kelas" required>
                                        <label class="form-label">Kelas</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="unit" id="unit" required>
                                        <label class="form-label">Unit</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="alamat" cols="30" rows="5" class="form-control no-resize" id="alamat" ></textarea>
                                        <label class="form-label">Alamat</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="checkbox" name="checkbox">
                                    <label for="checkbox">Saya Bukan Robot</label>
                                </div>
                                <button type="submit" class="btn btn-primary waves-effect" >Simpan</button>
                        
                        </div>
                    </div>
                </div>
                </form>
            </div>


@endsection

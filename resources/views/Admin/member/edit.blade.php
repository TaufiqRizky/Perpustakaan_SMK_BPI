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
                           <form action="{{ url('/member/'.$member->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama" id="nama" value="{{ $member->nama }}" required>
                                        <label class="form-label">Nama</label>
                                    </div>
                                </div>
                                <p>
                                    <input name="jk" type="radio" id="jk" value="L">
                                    <label for="jk">Laki-laki</label>

                                    <input name="jk" type="radio" id="jkp" value="P">
                                    <label for="jkp">Perempuan</label>
                                </p>
                                <div class="row clearfix">
                                <div class="col-sm-12">
                                    <select class="form-control show-tick" name="unit" id="unit">
                                        <option value="">-- Select Unit --</option>
                                        <option value="SMA">SMA</option>
                                        <option value="SMK">SMK</option>
                                        <div class="Ojenis">
                                            
                                        </div>
                                    </select>
                                </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="usia" id="usia" value="{{ $member->usia }}" required>
                                        <label class="form-label">Usia</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="kelas" id="kelas" value="{{ $member->kelas }}" required>
                                        <label class="form-label">Kelas</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="alamat" cols="30" rows="5" class="form-control no-resize" id="alamat" >{{ $member->alamat }} </textarea>
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

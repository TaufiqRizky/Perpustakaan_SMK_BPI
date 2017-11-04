@extends('layouts.admin')

@section('content')

<div class="block-header">
    <h2>Tambah Buku</h2>
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
                        <div class="body js-sweetalert">
                           
                            {!! csrf_field() !!}
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="judul" id="judul" required>
                                        <label class="form-label">Judul</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="pengarang" id="pengarang" required>
                                        <label class="form-label">Pengarang</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="penerbit" id="penerbit" required>
                                        <label class="form-label">Penerbit</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="stok" id="stok" required>
                                        <label class="form-label">Stok</label>
                                    </div>
                                </div>
                    			<div class="row clearfix">
                                <div class="col-sm-6">
                                    <select class="form-control show-tick" id="jenis">
                                        <option value="">-- Select Jenis --</option>
                                        @foreach($jenis as $row => $value)
                                        <option value="{{$value->id}}">{{$value->jenis}}</option>
                                        @endforeach
                                        <div class="Ojenis">
                                            
                                        </div>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <select class="form-control show-tick" id="genre" >
                                        <option value="">-- Select Genre --</option>
                                        @foreach($genre as $row => $value)
                                        <option value="{{$value->id}}">{{$value->genre}}</option>
                                        @endforeach
                                        <div class="Ogenre">
                                            
                                        </div>
                                    </select>
                                </div>
                            </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="sinopsis" cols="30" rows="5" class="form-control no-resize" id="sinopsis" ></textarea>
                                        <label class="form-label">Sinopsis</label>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <input type="checkbox" id="checkbox" name="checkbox">
                                    <label for="checkbox">Saya Bukan Robot</label>
                                </div>
                                <button class="btn btn-primary waves-effect" data-type="prompt">Simpan</button>
                        
                        </div>
                    </div>
                </div>
            </div>


@endsection

@section('js')

<script type="text/javascript">


   
</script>


@endsection
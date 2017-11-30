@extends('layouts.admin')

@section('content')

<div class="block-header">
    <h2>DIDIE KER NAMBAH KEN BUKU</h2>
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
                        <div class="body ">
                           <form action="{{ url('buku/store') }}" enctype="multipart/form-data" method="POST">
                            {!! csrf_field() !!}
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="judul" id="judul" value="" required>
                                        <input type="hidden" class="form-control" name="barcode" id="barcode" value="{{$barcode}}" >
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
                                    <select class="form-control show-tick" id="jenis" name="jenis">
                                        <option value="">-- Select Jenis --</option>
                                        @foreach($jenis as $row => $value)
                                        <option value="{{$value->id}}">{{$value->jenis}}</option>
                                        @endforeach
                                        <div class="Ojenis">
                                            
                                        </div>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <select class="form-control show-tick" id="genre" name="genre" >
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
                                
                               
                                <button class="btn btn-primary waves-effect" type="submit">Simpan</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>


@endsection

@section('js')




@endsection
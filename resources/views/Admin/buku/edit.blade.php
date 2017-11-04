@extends('layouts.admin')

@section('content')

<div class="block-header">
    <h2>Edit Buku</h2>
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
                                        <input type="text" class="form-control" name="judul" id="judul" value="{{ $buku->judul }}" required>
                                        <label class="form-label">Judul</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="pengarang" id="pengarang" value="{{ $buku->pengarang }}" required>
                                        <label class="form-label">Pengarang</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="penerbit" id="penerbit" value="{{ $buku->penerbit }}" required>
                                        <label class="form-label">Penerbit</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="stok" id="stok" value="{{ $buku->stok }}" required>
                                        <label class="form-label">Stok</label>
                                    </div>
                                </div>
                    			<div class="row clearfix">
                                <div class="col-sm-6">
                                    <select class="form-control show-tick jenis" id="jenis" >
                                        <option value="">-- Select Jenis --</option>
                                         @foreach($jenis as $row => $value)
                                        <option value="{{$value->id}}">{{$value->jenis}}</option>
                                       
                                        @endforeach
                                      
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <select class="form-control show-tick" id="genre"  >
                                        <option value="">-- Select Genre --</option>
                                        @foreach($genre as $row => $value)
                                        <option value="{{$value->id}}">{{$value->genre}}</option>
                                       
                                        @endforeach
                                       
                                    </select>
                                </div>
                            </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="sinopsis" cols="30" rows="5" class="form-control no-resize" id="sinopsis" >{{ $buku->sinopsis }} </textarea>
                                        <label class="form-label">Sinopsis</label>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <input type="checkbox" id="checkbox" name="checkbox">
                                    <label for="checkbox">Saya Bukan Robot</label>
                                </div>
                                <button class="btn btn-primary waves-effect" data-id="{{ $buku->id }}" data-type="eBuku">Update</button>
                        
                        </div>
                    </div>
                </div>
            </div>


@endsection

@section('js')

<script type="text/javascript">
    var jenis='{{ $buku->jenis }}';
    var genre='{{ $buku->genre }}';
    $(document).ready(function(){
       $("#jenis").val(jenis).change();
       $("#genre").val(genre).change();
    });

    $(document).on("keyup ", ".input-alert", function(){
        if ($(this).val().length == 13) {
            $('#btn-confirm').click();
        }else{
           swal.showInputError("Please scan barcode ean13 !!!"); return false
        }
        // console.log($(this).val().length);
            
        });

   
</script>


@endsection
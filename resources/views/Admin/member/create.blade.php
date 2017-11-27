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
                                        <input type="text" class="form-control" name="barcode" id="barcode" required>
                                        <label class="form-label">NIS</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama" id="nama" pattern="[A-z]{1,30}" required>
                                        <label class="form-label">Nama</label>
                                    </div>
                                </div>
                                <p>
                                    <input name="jk" type="radio" id="jk" value="L">
                                    <label for="jk">Laki-laki</label>

                                    <input name="jk" type="radio" id="jkp" value="P">
                                    <label for="jkp">Perempuan</label>
                                </p>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="usia" id="usia" pattern="[0-9]{1,3}" required>
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
                                    <div class="col-sm-12" align="left">
                                        <img width="120" class=" img-responsive preview" alt="Preview Photo">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <div class="input-group">
                                            <label class="input-group-btn">
                                                <span class="btn btn-primary">
                                                    Choose Photo <input type="file" class="inputfoto" accept="image/png, image/jpeg, image/gif, image/ico" name="foto" id="logo" style="display: none;" multiple>
                                                </span>
                                            </label>
                                            <input type="text" class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary waves-effect" >Simpan</button>
                        
                        </div>
                    </div>
                </div>
                </form>
            </div>


@endsection

@section('js')

<script type="text/javascript">
    $(document).ready(function() {

        //preview logo
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('.preview').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $(".inputfoto").change(function(){
            readURL(this);
        });
    });
</script>
<script type="text/javascript">
    $(function() {
          // We can attach the `fileselect` event to all file inputs on the page
        $(document).on('change', ':file', function() {
            var input = $(this),
                numFiles = input.get(0).files ? input.get(0).files.length : 1,
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
            input.trigger('fileselect', [numFiles, label]);
        });
          // We can watch for our custom `fileselect` event like this
        $(document).ready( function() {
            $(':file').on('fileselect', function(event, numFiles, label) {

                var input = $(this).parents('.input-group').find(':text'),
                    log = numFiles > 1 ? numFiles + ' files selected' : label;

                if( input.length ) {
                    input.val(log);
                }
            });
        });
    });
</script>
<script type="text/javascript">
    var nama = document.getElementById('nama');
    var usia = document.getElementById('usia');

    nama.oninvalid = function(event) {
        event.target.setCustomValidity('Maksimal 30 karakter!');
    }

    usia.oninvalid = function(event) {
        event.target.setCustomValidity('Harus angka!');
    }
</script>

@endsection
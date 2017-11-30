@extends('layouts.admin')

@section('content')
    <div class="block-header">
        <h2>Management Peminjaman</h2>
    </div>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>Management Peminjaman</h2>
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
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has('alert-' . $msg))
                        <p class="alert alert-{{ $msg }}" style="text-align: center;">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                    @endif
                @endforeach
                <div class="body">
                    <form action="{{ route('admin-post-peminjaman') }}" enctype="multipart/form-data" method="POST">
                        {!! csrf_field() !!}
                        <div class="form-group{{ $errors->has('member_barcode') ? ' has-error' : '' }} form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="member_barcode" id="member_barcode">
                                <label class="form-label">Barcode Member</label>
                            </div>
                            @if($errors->has('member_barcode'))
                                <span class="help-block">
                                    {{ $errors->first('member_barcode') }}
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('member_name') ? ' has-error' : '' }} form-float member_name">
                            <div class="form-line">
                                <input type="text" class="form-control" name="member_name" value=" " id="member_name" readonly>
                                <label class="form-label">Member Name</label>
                            </div>
                            @if($errors->has('member_name'))
                                <span class="help-block">
                                    {{ $errors->first('member_name') }}
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('buku_barcode.0') ? ' has-error' : '' }} form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="buku_barcode[]" multiple="multiple" id="buku_barcode1" oninput="addInput()">
                                <label class="form-label">Barcode Buku</label>
                            </div>
                            @if($errors->has('buku_barcode.0'))
                                <span class="help-block">
                                    {{ $errors->first('buku_barcode.0') }}
                                </span>
                            @endif
                        </div>
                        <div class="form-group form-inline form-float judul_buku1">
                            <div class="form-line">
                                <input type="text" class="form-control" name="judul_buku1" value=" " multiple="multiple" id="judul_buku1" readonly>
                                <label class="form-label">Judul Buku</label>
                            </div>
                        </div>
                        <script type="text/javascript">
                            var countBox = 1;
                            var boxName = 0;
                            function addInput(){
                                var boxName="buku_barcode[]"; 
                                
                                if (countBox++ <= 2) {
                                    document.getElementById('responce').innerHTML +='<div class="form-group form-float"><div class="form-line"><input type="text" class="form-control" name="'+boxName+'" id="buku_barcode2" /><label class="form-label"></label></div></div><div class="form-group form-float judul_buku2"><div class="form-line"><input type="text" class="form-control" name="judul_buku2" multiple="multiple" id="judul_buku2" readonly><label class="form-label"></label></div></div>';
                                }else{
                                    document.getElementById('add').disabled=true;
                                }
                                countBox += 1;
                                $(document).ready(function(){
                                    $(".judul_buku2").hide();
                                });

                                $(document).on("keyup", "#buku_barcode2", function(){
                                    var id=$(this).val();
                                    if ($(this).val().length >= 10) {
                                        var loading = $(this).parents('.card').waitMe({
                                            effect: 'win8_linear',
                                            text: 'Please Wait...',
                                            bg: 'rgba(255,255,255,0.90)',
                                            color: '#1abc9c'
                                        });
                                            $(".judul_buku2").show('slow','swing');
                                    }
                                    $.ajax({
                                        url:"../peminjaman/get-buku/"+$(this).val(),
                                        type:'GET',
                                        headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
                                        data:{id:$(this).val()},
                                        success: function (data) {
                                            var r = $.parseJSON(data);
                                            if (r != '') {
                                                $('#judul_buku2').val(r[0]["judul"]); 
                                                loading.waitMe('hide');
                                                
                                            }
                                        },error: function (data) {
                                            console.log('error');
                                        }
                                    });     
                                });
                            }
                        </script>
                        <div id="responce"></div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="tgl_pinjam" id="tgl_pinjam" value="<?php echo date('Y-m-d');?>" required readonly>
                                <label class="form-label">Tanggal Peminjaman</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <?php 
                                    $d = strtotime('+1 week')
                                ?>
                                <input type="text" class="form-control" name="tgl_kembali" id="tgl_kembali" value="<?php echo date('Y-m-d',$d)?>" required readonly>
                                <label class="form-label">Tanggal Pengembalian</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect" >Simpan</button> <a href="{{ route('admin-index-peminjaman') }}" class="btn btn-success waves-effect">Kembali</a>
                    </form>   
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script type="text/javascript">
        $(document).ready(function(){
            $(".member_name").hide();
        });
        $(document).on("keyup", "#member_barcode", function(){
            var id=$(this).val();
            if ($(this).val().length == 10) {
                var loading = $(this).parents('.card').waitMe({
                    effect: 'win8_linear',
                    text: 'Please Wait...',
                    bg: 'rgba(255,255,255,0.90)',
                    color: '#1abc9c'
                });
                $(".member_name").show('slow','swing');
            }
            $.ajax({
                url:"../transaksi/get-member/"+$(this).val(),
                type:'GET',
                headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
                data:{id:$(this).val()},
                success: function (data) {
                    var r = $.parseJSON(data);
                    if (r != '') {
                        $('#member_name').val(r[0]["nama"]); 
                        loading.waitMe('hide');
                    }
                },error: function (data) {
                    console.log('error');
                }
            });
        });

         $(document).ready(function(){
            $(".judul_buku1").hide();
            $(".judul_buku2").hide();

            });

         $(document).on("keyup", "#buku_barcode1", function(){
            var id=$(this).val();
            if ($(this).val().length >= 10) {
                var loading = $(this).parents('.card').waitMe({
                    effect: 'win8_linear',
                    text: 'Please Wait...',
                    bg: 'rgba(255,255,255,0.90)',
                    color: '#1abc9c'
                });
                    $(".judul_buku1").show('slow','swing');
            }

                $.ajax({
                    url:"../peminjaman/get-buku/"+$(this).val(),
                    type:'GET',
                    headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
                    data:{id:$(this).val()},
                    success: function (data) {
                       var r = $.parseJSON(data);
                       if (r != '') {
                      
                        $('#judul_buku1').val(r[0]["judul"]); 
                        loading.waitMe('hide');
                        
                       }

                        },
                        error: function (data) {
                             console.log('error');
                        }
                });

                
            });
    </script>
@endsection

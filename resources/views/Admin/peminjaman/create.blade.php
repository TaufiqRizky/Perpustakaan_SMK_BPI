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
                <div class="body">
                    <form action="{{ route('admin-post-peminjaman') }}" enctype="multipart/form-data" method="POST">
                        {!! csrf_field() !!}
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="member_barcode" id="member_barcode" required>
                                <label class="form-label">Barcode Member</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="member_name" id="member_name" required>
                                <label class="form-label">Member Name</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="buku_barcode[]" multiple="multiple" id="buku_barcode" required>
                                <label class="form-label">Barcode Buku</label>
                            </div>
                            <div class="pull-right"> 
                                <a class="btn btn-primary" href="#" onclick="addInput()" id="add"><i class="material-icons">add</i></a>
                            </div>
                        </div>
                        <script type="text/javascript">
                            var countBox = 1;
                            var boxName = 0;
                            function addInput(){
                                var boxName="buku_barcode[]"; 
                                
                                if (countBox++ <= 3) {
                                    document.getElementById('responce').innerHTML +='<div class="form-group form-float"><div class="form-line"><input type="text" class="form-control" name="'+boxName+'" id="'+boxName+'" /><label class="form-label"></label></div></div>';
                                }else{
                                    document.getElementById('add').disabled=true;
                                }
                                countBox += 1;
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
                       
                        <button type="submit" class="btn btn-primary waves-effect" >Simpan</button>
                    </form>   
                </div>
            </div>
        </div>
    </div>

@endsection


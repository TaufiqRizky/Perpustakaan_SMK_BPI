@extends('layouts.admin')

@section('content')

<!-- Striped Rows -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Transaksi Pengembalian Buku
                                
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li>
                                    <a href="javascript:void(0);" data-toggle="cardloading" title="Reload" data-loading-effect="timer">
                                        <i class="material-icons">loop</i>
                                    </a>
                                </li>
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
                           
                                <div class="form-group form-float ">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="id_member" id="id_member" >
                                            <label class="form-label">Id Member</label>
                                        </div>
                                </div>
                               
                                <div class="form-group form-float n_member">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="n_member" id="n_member" value=" " readonly>
                                            <label class="form-label">Nama Member</label>
                                        </div>
                                </div>
                                <div class="form-group form-float alamat">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="alamat" id="alamat" value=" " readonly>
                                            <label class="form-label">Alamat Member</label>
                                        </div>
                                </div>
                                <div class="form-group form-float unit">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="unit" id="unit" value=" " readonly hidden>
                                            <label class="form-label">Unit</label>
                                        </div>
                                </div>
                                 <div class="form-group form-float tgl_pinjam">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="tgl_pinjam" id="tgl_pinjam" value =" " readonly>
                                            <label class="form-label">Tanggal zaman Old</label>
                                        </div>
                                </div>
                                 <div class="form-group form-float ">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="tgl" id="tgl" value="<?php echo date('Y-m-d')?>" readonly>
                                            <label class="form-label">Tanggal zaman Now</label>
                                        </div>
                                </div>
                                 <div class="form-group form-float ">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="total_denda">
                                            <label class="form-label">Total Denda</label>
                                        </div>
                                </div>
                                <br><br>
                                <h5>Daftar Buku Yang di Pinjam</h5>
                                <table border="1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Barcode</th>
                                            <th>Judul</th>
                                         
                                        </tr>
                                    </thead>
                                    <tbody id="table_peminjaman">
                                        
                                    </tbody>
                                </table>
                                 <div class="form-group form-float ">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="Scan" id="scan" value=" " >
                                            <label class="form-label">Scan Buku Yang di Pinjam</label>
                                        </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Striped Rows -->


@endsection
@section('js')
<script type="text/javascript">
var json_member;
var json_peminjaman;
$(document).ready(function(){
    $(".n_member").hide();
    $(".alamat").hide();
    $(".unit").hide();
    $(".tgl_pinjam").hide();

    });

    function data_peminjaman(r){
        var jml=Object.keys(r).length;
         var i=0;
         var j=1;
                 $('#table_peminjaman').empty();

                   while (i < jml) {

                        $('#table_peminjaman').append("<tr ><td>"+j+"</td><td>"+r[i]['buku_barcode']+"</td><td>"+r[i]['judul']+"</td></tr>");
                        i++;
                        j++;
                    }
    }

    // function denda(){
    //     var total_denda=Object.keys().length;
    //     var tgl_pinjam=$('#tgl_pinjam').val();
    //     var tgl=$('#tgl').val();
    //     var tgl_kembali=;
                
    // }

    $(document).on("keyup", "#id_member", function(){
        var id=$(this).val();

        $(".n_member").show('slow','swing');
         $('.alamat').show('slow','swing');
         $('.unit').show('slow','swing');
          $('.tgl_pinjam').show('slow','swing');
        
            $.ajax({
                url:"get-member/"+$(this).val(),
                type:'GET',
                headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
                data:{id:$(this).val()},
                success: function (data) {
                   var r = $.parseJSON(data);
                   json_member=r;

                    $('#n_member').val(r[0]["nama"]); 
                    $('#alamat').val(r[0]["alamat"]);
                    $('#unit').val(r[0]["unit"]);
                   
                  
                    console.log($(this).val());
                    },
                    error: function (data) {
                         console.log('error');
                    }
            });

            $.ajax({
                url:"get-peminjaman/"+$(this).val(),
                type:'GET',
                headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
                data:{id:$(this).val()},
                success: function (data) {
                   var r = $.parseJSON(data);
                   json_peminjaman=r;
                    $('#tgl_pinjam').val(r[0]["tgl_pinjam"]);
                   data_peminjaman(r);
                 
                   
                    },
                    error: function (data) {
                         console.log('error');
                    }
            });
      
       
            
        });

    $(document).on("keyup", "#scan", function(){
        var id=$(this).val();
        if (json_peminjaman==null || json_member==null) {
            swal ( "please" ,  "Scan member barcode first !!" ,  "error" );
        }
      
       
            
        });

   
</script>

@endsection

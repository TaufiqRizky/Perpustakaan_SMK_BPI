@extends('layouts.admin')

@section('css')
    <style type="text/css">
        .background_berhasil{
            background-image: linear-gradient(to left,transparent,transparent 50%,#7CEECE 50%,#7CEECE);
            background-position: 100% 0;
            background-size: 200% 100%;
            transition: all .90s ease-in;
        }

        .background_berhasil2{
            background-position: 0 0;
        }
         .check{
            color: green !important;
        }
    </style>
@endsection

@section('content')

<!-- Striped Rows -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DIDIE TEH TRANSAKSI
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
                                            <label class="form-label">ID NA SI MEMBER</label>
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
                                            <input type="text" class="form-control" name="tgl_pinjam" id="tgl_pinjam" value=" "  readonly>
                                            <label class="form-label">Tanggal Pinjam</label>
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
                                            <input type="text" class="form-control" name="total_denda" id="total_denda" value=" ">
                                            <label class="form-label">Total Denda</label>
                                        </div>
                                </div>
                                <br><br>
                                <h5>Daftar Buku Yang di Pinjam</h5>
                                <table border="1" class="table table-bordered ">
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
                                            <input type="text" class="form-control" name="Scan" id="scan"  >
                                            <label class="form-label">Scan Buku Yang di Pinjam</label>
                                        </div>
                                </div>
                                <br>

                                <button class="btn btn-primary waves-effect btn-store">Simpan</button>
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
var gallery_peminjaman = {};
var id_peminjaman;
var a=0;
var denda;
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

                        $('#table_peminjaman').append("<tr class='background_berhasil "+ r[i]['buku_barcode']+" ' ><td id='"+ r[i]['buku_barcode']+"'>"+j+"</td><td>"+r[i]['buku_barcode']+"</td><td>"+r[i]['judul']+"</td></tr>");
                        i++;
                        j++;
                    }
    }


    function denda(x){
    var tgl = $('#tgl').val();
    
    var tgl_baru= tgl.toString('Y-m-d');

    var selisih = new Date(new Date(x) - new Date(tgl)) ;
    var days  = selisih/1000/60/60/24;



    var total_denda = $('#total_denda').val();

    var error = null;
     if (Number(days) > 1) {
        denda = days*2000;
        var dendaInt = parseInt(denda, 10);
        var dendaStr = dendaInt.toString();
        var dendaStrRev = dendaStr.split('').reverse().join('');
        var dendaStrRevTitik = '';
        for(var i = 0; i < dendaStrRev.length; i++){
            dendaStrRevTitik += dendaStrRev[i];
            if((i+1) % 3 === 0 && i !== (dendaStrRev.length-1)){
                dendaStrRevTitik += '.';
            }
        }
        var dendaRp = dendaStrRevTitik.split('').reverse().join('');
        $('#total_denda').val('Rp. '+dendaRp);
     } else {
        error = "denda Gagal";
     }

    }

    

    $(document).on("keyup", "#id_member", function(){
        var id=$(this).val();
        
        if ($(this).val().length == 10) {
            
            var loading = $(this).parents('.card').waitMe({
                effect: 'stretch',
                text: 'Loading...',
                bg: 'rgba(255,255,255,0.90)',
                color: '#555'
            });
        $(".n_member").show('slow','swing');
         $('.alamat').show('slow','swing');
         $('.unit').show('slow','swing');
          $('.tgl_pinjam').show('slow','swing');
        }

        
        
            $.ajax({
                url:"get-member/"+$(this).val(),
                type:'GET',
                headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
                data:{id:$(this).val()},
                success: function (data) {
                   var r = $.parseJSON(data);
                   if (r != '') {
                   json_member=r;

                    $('#n_member').val(r[0]["nama"]); 
                    $('#alamat').val(r[0]["alamat"]);
                    $('#unit').val(r[0]["unit"]);

                     loading.waitMe('hide');
                    
                     
                        
                    

                   }

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
                   if (r != '') {
                   json_peminjaman=r;
                   var tgl=r[0]["tgl_pinjam"];
                    var tgl_baru=tgl.toString('Y-m-d');
                    $('#tgl_pinjam').val(tgl_baru);
                    id_peminjaman=r[0]["peminjaman_id"];
                    
                     denda(r[0]["tgl_kembali"]);
                    data_peminjaman(r);
                    console.log(r);
                     $("#scan").focus();
                     
                    
                   }
                   
                   
                    },
                    error: function (data) {
                         console.log('error');
                    }
            });
      
       
            
        });

    $(document).on("keyup", "#scan", function(){
        var id=$(this).val();
       
        console.log(jml);
        if (json_peminjaman== null || json_member== null) {
            swal ( "Error !!" ,  "Please scan/type ID member barcode first !!" ,  "error" );
        }else{
            var jml=Object.keys(json_peminjaman).length;
            for (var i = 0; i < jml; i++) {
               
                    if ( $(this).val() != json_peminjaman[i]['buku_barcode'] ){
                        if ($(this).val().length == 13) {
                            swal ( "404 Not Found" ,  "Barcode tidak sama !!" ,  "error" );
                        }
                      
                      
                      
                      }else{
                        if ($(this).val().length == 13) {
                             $("#"+id).empty();
                              $("#"+id).append("<i class='material-icons check'>check</i>").hide().fadeIn(2000);
                               swal({
                                  type: 'success',
                                  title: 'Barcode Sesuai',
                                  showConfirmButton: false,
                                  timer: 1500
                                })
                                     $("."+id).css({"background-position": "0 0"});
                                     gallery_peminjaman[a]=$(this).val();
                                     a++;
                                     console.log(gallery_peminjaman);
                                     $(this).val(null);

                                
                           
                        }
                       
                        break;
                      }
                    
                    }
           

          
               

                }

       
        });

    $(document).on("click", ".btn-store", function(){
        if ($('#id_member').val() != '') {
            var r = confirm("Simpan Data?");
            var jml=Object.keys(gallery_peminjaman).length;
            if (r) {
                     $.ajax({
                        url:"store-pengembalian",
                        type:'POST',
                        headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
                        data:{gallery:gallery_peminjaman,member:$('#id_member').val(),peminjaman:id_peminjaman,tgl:$('#tgl').val(),a:jml, denda:denda},
                        success: function (data) {
                           swal ( "Berhasil" ,  "Berhasil kk" ,  "success" );
                           location.reload();
                            },
                            error: function (data) {
                                 swal ( "Eror 500" ,  "Error input pengembalian !!" ,  "error" );
                            }
                    });
            }
            
             
        }else{
             swal ( "Data Kosong !!" ,  "Pastikan semua diisi" ,  "warning" );
        }
       

       
        });
</script>

@endsection

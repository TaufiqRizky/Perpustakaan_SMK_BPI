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
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Striped Rows -->


@endsection
@section('js')
<script type="text/javascript">
$(document).ready(function(){
    $(".n_member").hide();
    $(".alamat").hide();
    $(".unit").hide();

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

    $(document).on("keyup ", "#id_member", function(){
        var id=$(this).val();

        $(".n_member").show('slow','swing');
         $('.alamat').show('slow','swing');
         $('.unit').show('slow','swing');
        
            $.ajax({
                url:"get-member/"+id,
                type:'GET',
                headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
                data:{id:id},
                success: function (data) {
                   var r = $.parseJSON(data);
                    $('#n_member').val(r[0]["nama"]); 
                    $('#alamat').val(r[0]["alamat"]);
                    $('#unit').val(r[0]["unit"]);
                    console.log(r);
                    console.log($(this).val());
                    },
                    error: function (data) {
                         console.log('error');
                    }
            });

            $.ajax({
                url:"get-peminjaman/"+id,
                type:'GET',
                headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
                data:{id:id},
                success: function (data) {
                   var r = $.parseJSON(data);
                   
                   data_peminjaman(r);
                 
                   
                    },
                    error: function (data) {
                         console.log('error');
                    }
            });
      
       
            
        });

   
</script>

@endsection

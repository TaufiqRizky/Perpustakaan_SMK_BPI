@extends('layouts.admin')

@section('content')

<div class="block-header">
    <h2>Detail Karyawan</h2>
</div>

<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>ID Card</h2>
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
                        <center>
                        <div class="body">
                            <div class="printableArea">
                                    <div style="height: 6.5cm; width: 6cm; background-image: url('/images/bg.jpg'); background-size: 100% 100%;  ">
                                        <br>
                                        <b><div style="color: white; font-size: 15px;">PERPUSTAKAAN BPI</div></b>
                                        <br>
                                        <div class="img-circle" style="height: 3.5cm; width: 3.5cm; background-image: url('/storage/karyawan/{{$karyawan->photo}}'); background-size: 100% 100%;">
                                        
                                    </div>
                                    <br>
                                    <b><div style="color: white; font-size: 15px;"> {{ $karyawan->nama }}</div></b>
                                    <br>
                                    </div>
                                    <div style="height: 2.5cm; width: 6cm; background-color: white">
                                        <br>
                                    <b><div style="color: #1E8BC3; font-size: 15px;"> {{ $karyawan->jabatan }}</div></b>
                                    <br>
                                        <div id="nik"></div>
                                    
                                    
                                    <br>
                                    <br>
                                    
                                </div>
                                <br>
                                    <br>
                                <a href="javascript:void(0);" id="printButton">Print</a> 
                        </div>
                    </div>
                        </center>
                    </div>
                </div>
            </div>


@endsection
@section('js')

<script type="text/javascript">
var table;
      $(document).ready(function(){
       
       $("#nik").barcode("{{ $karyawan->nik }}", "code128", { barHeight:15});     
      
});

</script>
<script type="text/javascript">
    $(document).ready(function(){
    $("#printButton").click(function(){
        var mode = 'iframe'; //popup
        var close = mode == "popup";
        var options = { mode : mode, popClose : close};
        $("div.printableArea").printArea( options );
    });
});
</script>


@endsection
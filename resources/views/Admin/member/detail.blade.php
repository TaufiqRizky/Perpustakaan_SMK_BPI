@extends('layouts.admin')

<style type="text/css" media="screen">
    @media print {
        .printableArea {
            -webkit-print-color-adjust: exact !important;
        }
    }
</style>

@section('content')

<div class="block-header">
    <h2>Detail Member</h2>
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
                            <div class="id-card">
                                <div class="printableArea">
                                    <div style="height: 6.5cm; width: 6cm; background-image: url('/images/bg-2.jpg'); background-size: 100% 100%;  ">
                                        <br>
                                        <b><div style="color: white; font-size: 15px;">PERPUSTAKAAN BPI</div></b>
                                        <br>
                                        <div style="height: 3.5cm; width: 2.5cm; background-image: url('/images/logo-bpi.png'); background-size: 100% 100%;">   
                                    </div>
                                    <br>
                                    <b><div style="color: white; font-size: 15px;"> {{ $member->nama }}</div></b>
                                    <br>
                                    </div>
                                    <div style="height: 2.5cm; width: 6cm; background-color: white">
                                        <br>
                                        <b><div style="color: #1E8BC3; font-size: 15px;">{{ $member->unit }}</div></b>
                                        <br>
                                        <div id="barcode"></div>
                                    </div>
                                    <br>
                                    <br>
                                </div>
                                <a href="javascript:void(0);" id="printButton">Print</a> 
                            </div>
                        </div>
                    </div>
                </center>
                </div>
            </div>


@endsection
@section('js')

<script type="text/javascript">
var table;
      $(document).ready(function(){
       
       $("#barcode").barcode("{{ $member->barcode }}", "code128", { barHeight:30});     
      
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
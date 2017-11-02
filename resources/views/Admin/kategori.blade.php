@extends('layouts.admin')

@section('content')

<!-- Striped Rows -->
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Master Jenis
                                
                            </h2>
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
                        <div class="body table-responsive">
                            <table class="table table-bordered table-hovered table-striped js-sweetalert" id="Tjenis">
                                <thead>
                                    <tr>
                                        <th align="center">No</th>
                                        <th align="center">jenis</th>
                                        <th align="center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($jenis as $row => $value)
                                    <tr class="itemjenis{{$value->id}}">
                                        <th scope="row">{{ $row+1 }}</th>
                                        <td>{{ $value->jenis }}</td>
                                        
                                        <td>
                                        
                                            <button class="btn btn-danger waves-effect" data-id="{{$value->id}}" data-type="D_jenis"><i class="material-icons">delete</i></button>
                                        </td>
                                    </tr>
                                  
                               @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Master Genre
                                
                            </h2>
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
                        <div class="body table-responsive">
                            <table class="table table-bordered table-hovered table-striped js-sweetalert" id="Tgenre">
                                <thead>
                                    <tr>
                                        <th align="center">No</th>
                                        <th align="center">Genre</th>
                                        <th align="center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($genre as $row => $value)
                                    <tr class="itemgenre{{$value->id}}">
                                        <th scope="row">{{ $row+1 }}</th>
                                        <td>{{ $value->genre }}</td>
                                        <td>
                                            <button class="btn btn-danger waves-effect" data-id="{{$value->id}}" data-type="D_genre"><i class="material-icons">delete</i></button>
                                        </td>
                                    </tr>
                                  
                               @endforeach
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
    $('#Tjenis').DataTable();
    $('#Tgenre').DataTable();
});
</script>



@endsection

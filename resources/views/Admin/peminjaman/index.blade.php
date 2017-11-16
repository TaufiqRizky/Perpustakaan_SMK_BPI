@extends('layouts.admin')

@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <div class="pull-right">
                        <a class="btn btn-default" href="" title="Refresh"><i class="material-icons">autorenew</i></a>
                        <a class="btn btn-primary" href="{{ route('admin-create-peminjaman') }}" title=""><i class="material-icons">add</i></a>
                    </div>
                    <h2>Data Master Karyawan</h2>
                </div>
                <div class="body table-responsive">
                    <table id="peminjaman-table" class="table table-hover table-responsive">
                        <thead>
                            <tr>
                                <th align="center">ID</th>
                                <th align="center">Nama Peminjam</th>
                                <th align="center">Tanggal Peminjaman</th>
                                <th align="center">Tanggal Pengembalian</th>
                                <th align="center">Created At</th>
                                <th align="center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($pinjam as $row => $value)
                            <tr >
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->tgl_pinjam }}</td>
                                <td>{{ $value->tgl_kembali }}</td>
                                <td>{{ $value->created_at }}</td>
                                <td>          
                                    <a class="btn btn-info waves-effect" data-type="" href="{{ url('peminjaman/'.$value->id.'/show') }}" ><i class="material-icons">remove_red_eye</i></a>

                                    <a class="btn btn-warning waves-effect" data-type="" href="{{ url('peminjaman/'.$value->id.'/edit') }}" ><i class="material-icons">edit</i></a>
                                        
                                    <button class="btn btn-danger waves-effect" data-id="{{$value->id}}" data-type="D_karyawan"><i class="material-icons">delete</i></button>
                                </td>
                            </tr>        
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>    
    </div>
@endsection
@section('js')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#peminjaman-table').DataTable();
        });
    </script>
@endsection                
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pengembalian;
use App\denda;
use App\Peminjaman;
use App\PengembalianGallery;

class PengembalianController extends Controller
{
    //
	public function __construct()
	    {
	        $this->middleware('auth');
	    }

	  public function index(){
	  	return view('admin.pengembalian.index');
	  }

	  public function get_member($id){
	  	$member = DB::table('kelas')
        ->join('member','kelas.id','=','member.kelas_id')
        ->join('jurusan','member.jurusan_id','=','jurusan.id')
        ->where('barcode', '=', $id)->get();
	  	return $member->toJson();
	  }

	  public function get_peminjaman($id){
	  	$pinjam=DB::table('peminjaman')
      ->join('peminjaman_galleries','peminjaman.id','=','peminjaman_galleries.peminjaman_id')
      ->join('buku','peminjaman_galleries.buku_barcode','=','buku.barcode')->where('peminjaman.member_barcode', '=', $id)
      ->where('peminjaman_galleries.status','dipinjam')
     ->get();
      return $pinjam->toJson();
	  }

	 

	  public function store(Request $data){
	  	$j = (int)$data['a'];
	  	$Pengembalian = new Pengembalian;
        $Pengembalian->member_barcode= $data['member'];
        $Pengembalian->id_peminjaman = $data['peminjaman'];
        $Pengembalian->tgl_dikembalikan   = $data['tgl'];
        $Pengembalian->save();
        Peminjaman::where('member_barcode',$data['member'])
                    ->where('status','1')
                    ->update(['status' => '0']);
      
        for ($i=0; $i < $j ; $i++) { 
            $PengembalianGallery = PengembalianGallery::create([
                'pengembalian_id' => $Pengembalian->id,
                'buku_barcode' => $data->gallery[$i]
            ]);

            DB::table('buku')
            ->where('barcode', $data->gallery[$i])
            ->update(['stok' => $data->stok[$i]]);

            DB::table('peminjaman_galleries')
            ->where('buku_barcode', $data->gallery[$i])
            ->update(['status' => 'dikembalikan']);

        }


        $denda = new denda;
        $denda->total_denda = $data['denda'];
        $denda->pengembalian_id = $Pengembalian->id;
 		$denda->save();
	  }
}
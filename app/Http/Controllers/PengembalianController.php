<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
	  	$member = DB::table('member')->where('barcode', '=', $id)->get();
	  	return $member->toJson();
	  }

	  public function get_peminjaman($id){
	  	$pinjam=DB::table('peminjaman')
      ->join('peminjaman_galleries','peminjaman.id','=','peminjaman_galleries.peminjaman_id')
      ->join('buku','peminjaman_galleries.buku_barcode','=','buku.barcode')->where('peminjaman.member_barcode', '=', $id)
     ->get();
      return $pinjam->toJson();
	  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

	public function index(){
		   //$data['buku']= \App\M_Buku::all();
      $data['peminjaman']= DB::table('member')
                        ->join('peminjaman','member.barcode','=','peminjaman.member_barcode')
                        ->join('peminjaman_galleries','peminjaman.id','=','peminjaman_galleries.peminjaman_id')
                        ->join('pengembalian','peminjaman_galleries.peminjaman_id','=','pengembalian.id_peminjaman')
                        ->join('denda','pengembalian.id','=','denda.pengembalian_id')
                        ->join('pengembalian_galleries','denda.pengembalian_id','=','pengembalian_galleries.pengembalian_id')
                        ->join('buku','pengembalian_galleries.buku_barcode','=','buku.barcode')
      ->select('*')->get();
		return view('admin.report.index',$data);
	}
}

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
      $data['report']= DB::table('peminjaman_galleries')
      ->join('pengembalian_galleries','peminjaman_galleries.buku_barcode','=','pengembalian_galleries.id')
      ->select('peminjaman_galleries.id','peminjaman_galleries.buku_barcode')->get();
		return view('admin.report.index',$data);
	}
}

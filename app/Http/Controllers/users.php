<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class users extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index_k(){
		   //$data['buku']= \App\M_Buku::all();
      $data['buku']= DB::table('buku')
      ->join('jenis','buku.jenis','=','jenis.id')
      ->join('genre','buku.genre','=','genre.id')
      ->select('buku.id','buku.barcode','buku.cover','buku.judul','buku.pengarang','buku.penerbit','genre.genre','jenis.jenis','buku.stok','buku.sinopsis')->get();
		return view('admin.Buku',$data);
	}
}

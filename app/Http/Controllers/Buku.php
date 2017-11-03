<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Buku extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

	public function index(){
		   //$data['buku']= \App\M_Buku::all();
      $data['buku']= DB::table('buku')
      ->join('jenis','buku.jenis','=','jenis.id')
      ->join('genre','buku.genre','=','genre.id')
      ->select('buku.id','buku.barcode','buku.cover','buku.judul','buku.pengarang','buku.penerbit','genre.genre','jenis.jenis','buku.stok','buku.sinopsis')->get();
		return view('admin.buku.index',$data);
	}

    public function create(){
      $data['jenis']= \App\M_Jenis::all();
       $data['genre']= \App\M_genre::all();
   		return view('admin.buku.create',$data);
   }

   public function store(Request $request){
   		
   		$buku= new \App\M_Buku;
   		$buku->barcode=$request->barcode;
   		$buku->judul=$request->judul;
   		$buku->pengarang=$request->pengarang;
   		$buku->penerbit=$request->penerbit;
   		$buku->genre=$request->genre;
   		$buku->jenis=$request->jenis;
   		$buku->sinopsis=$request->sinopsis;
         $buku->stok=$request->stok;
   		$buku->save();
   		return redirect('buku');
   		
   }

    public function destroy($id){
         \App\M_Buku::destroy($id);//method menghapus data 
        
   }

   public function edit($id){
      $data['jenis']= \App\M_Jenis::all();
       $data['genre']= \App\M_genre::all();
         $data['buku'] = \App\M_Buku::find($id);
         return view('admin.buku.edit',$data);
   }

   public function update(Request $request, $id){
      $buku = \App\M_Buku::find($id);
      $buku->update($request->all());//method update
      return redirect('buku');
   }

}

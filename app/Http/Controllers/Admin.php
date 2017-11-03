<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class Admin extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
       $data['jenis']= \App\M_Jenis::all();
        $data['genre']= \App\M_Genre::all();
        return view('admin.kategori.index',$data);
    }

    public function storeJ(Request $request){
    	$jenis= new \App\M_Jenis;
   		$jenis->jenis=$request->jenis;
   		
   		$jenis->save();
   		return redirect('/');
    }

    public function storeG(Request $request){
    	$genre= new \App\M_Genre;
   		$genre->genre=$request->genre;
   		
   		$genre->save();
   		return redirect('/');
    }

     public function destroy_jenis($id){
         \App\M_Jenis::destroy($id);//method menghapus data 
        
   }
    public function destroy_genre($id){
         \App\M_Genre::destroy($id);//method menghapus data 
        
   }

  public function logoutAdmin(){
      Auth::logout();
      return redirect('/login');
    }  



}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
   		return view('admin.karyawan.create');
   }

   public function store(Request $request){
   		
   		$karyawan= new \App\karyawan;
   		$karyawan->nik=$request->nik;
   		$karyawan->nama=$request->nama;
      	$karyawan->alamat=$request->alamat;
      	$karyawan->tlp=$request->tlp;
   		$karyawan->jabatan=$request->jabatan;

  		if ($request->hasFile('photo')){
  			$photo = $request->file('photo');

  			$name = date('Y_m_d_His').'_'.$photo->getClientOriginalName();

  			$photo->move("/images/karyawan",$name);

  			$karyawan->photo = $name;
  		}
  		// if ($request->hasFile('image')) {
  		// 	$image = $request->file('image');
  		// 	$name= $image->getClientOriginalName();
  		// 	$image->move(public_path('product-image'),$name);
  		// 	$product->image = $name;
  			
  		// }
  		// $karyawan->photo = $fileName;
   		$karyawan->save();
   		return redirect('/karyawan/create');
   		
   }
}

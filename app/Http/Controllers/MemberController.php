<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
   		return view('admin.member.create');
   }

   public function store(Request $request){
   		
   		$member= new \App\member;
   		$member->barcode=$request->barcode;
   		$member->nama=$request->nama;
      $member->alamat=$request->alamat;
      $member->kelas=$request->kelas;
      $member->usia=$request->usia;
      $member->jk=$request->jk;
   		$member->unit=$request->unit;

  		if ($request->hasFile('foto')) {
        $foto = $request->file('foto');
          if ($foto->isValid()) {
            $fileName = date('Y_m_d_His').'_'.$foto->getClientOriginalName();
            
            $foto->move(public_path('storage/member'), $fileName);

      $member->foto = $fileName;
          }
      }      
   		$member->save();
   		return redirect('/member');
   		
   }

   public function index(){
      $data['member']= \App\member::all();
      return view('admin.member.index',$data);
   }

   public function destroy($id){
         \App\member::destroy($id);//method menghapus data 
        
   }

   public function detail($id){
      $data['member'] = \App\member::find($id);
      return view('admin.member.detail',$data);
   }

   public function edit($id){
      $data['member'] = \App\member::find($id);
      return view('admin.member.edit',$data);
   }

   public function update(Request $request, $id){
      $member = \App\member::find($id);
      $member->nama=$request->nama;
      $member->alamat=$request->alamat;
      $member->kelas=$request->kelas;
      $member->usia=$request->usia;
      $member->jk=$request->jk;
      $member->unit=$request->unit;
      $member->save();
      return redirect('/member');
   }

}

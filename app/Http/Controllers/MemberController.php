<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use app\member;
use DB;

class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
      $data['unit']= \App\member::all();
   		return view('admin.member.create',$data);
   }

   public function store(Request $request){
    $this->validate($request,[
            'barcode' => 'required',
            'nama' => 'required|max:30',
            'foto' => 'image'
        ]);
   		
   		$member= new \App\member;
   		$member->barcode=$request->barcode;
      $upper = strtoupper($request->nama);
   		$member->nama=$upper;
      $member->jk=$request->jk;
      $member->kelas_id=$request->kelas_id;
      $member->jurusan_id=$request->jurusan_id;

  		if ($request->hasFile('foto')) {
        $foto = $request->file('foto');
          if ($foto->isValid()) {
            $fileName = date('Y_m_d_His').'_'.$foto->getClientOriginalName();
            
            $foto->move(public_path('storage/member'), $fileName);

      $member->foto = $fileName;
          }
      }      
   		$member->save();
      $request->session()->flash('alert-success', 'Berhasil Menambah '.$request->nama.' Sebagai Member');
   		return redirect('/member');
   		
   }

   public function index(){
      $data['member']= DB::table('kelas')
        ->join('member','kelas.id','=','member.kelas_id')
        ->join('jurusan','member.jurusan_id','=','jurusan.id')
        ->get();
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
      $data['unit']= \App\member::all();
      $data['member'] = \App\member::find($id);
      return view('admin.member.edit',$data);
   }

   public function update(Request $request, $id){
      $member = \App\member::find($id);
      $member->barcode=$request->barcode;
      $member->nama=$request->nama;
      $member->jk=$request->jk;
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

}

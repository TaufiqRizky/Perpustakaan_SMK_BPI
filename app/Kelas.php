<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected  $table = 'kelas';
    public $timestamps = false;

    public function get_kelas(){
    	return Kelas::all();
    }

    public function show($kelas,$jurusan){
        $data =  $this->where('kelas_id',$kelas)->where('jurusan_id',$jurusan)->get();
        return $data;
    }
}

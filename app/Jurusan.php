<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table = 'jurusan';
    public $timestamps = false;

    public function get_jurusan(){
    	return Jurusan::all();
    }
}

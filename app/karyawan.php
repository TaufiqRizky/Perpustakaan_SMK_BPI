<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    public $table = "karyawan";
    protected $fillable = ['nik','nama', 'jk', 'alamat', 'tlp', 'jabatan','photo'];
}

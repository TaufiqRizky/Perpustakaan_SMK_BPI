<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    public $table = "karyawan";
    protected $fillable = ['nik','nama', 'alamat', 'tlp', 'jabatan','photo'];
}

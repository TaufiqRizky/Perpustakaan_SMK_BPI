<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    public $table = "member";
    protected $fillable = ['barcode','nama','alamat', 'kelas', 'usia', 'jk', 'unit', 'foto'];
}

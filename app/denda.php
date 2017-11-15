<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class denda extends Model
{
    public $table = "denda";
    protected $fillable = ['pengembalian_id' , 'total_denda'];
}

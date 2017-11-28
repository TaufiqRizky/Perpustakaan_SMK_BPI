<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    protected $table = 'pengembalian';

    protected $fillable = ['member_barcode','buku_barcode','id_peminjaman','tgl_dikembalikan'];

    public function member(){
        return $this->belongsTo('App\member','member_barcode');
    }

   
}

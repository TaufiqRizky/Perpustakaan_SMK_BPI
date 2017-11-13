<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeminjamanGallery extends Model
{
    protected $table = 'peminjaman_galleries';
    // MODIFIED BY ANNUR 26-07-2017
    protected $fillable = ['peminjaman_id','buku_barcode'];

    public function peminjaman(){
        return $this->belongsTo('App\Peminjaman', 'id');
    }

    public function buku(){
    	return $this->belongsTo('App\M_Buku', 'buku_barcode');
    }
}

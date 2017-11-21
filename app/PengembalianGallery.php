<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengembalianGallery extends Model
{
     protected $table = 'pengembalian_galleries';
    protected $fillable = ['pengembalian_id','buku_barcode'];
}

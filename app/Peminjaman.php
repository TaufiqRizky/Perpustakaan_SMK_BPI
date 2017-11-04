<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Peminjaman extends Model
{
    protected $table = 'peminjaman';

    protected $fillable = [
        'id','member_barcode','member_name','buku_barcode','buku_name','tgl_pinjam','tgl_kembali'
    ];
}

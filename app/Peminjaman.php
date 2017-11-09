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


    public static function datatables()
    {
        // // MODIFIED BY ANNUR 02-08-2017
        // return static::select('cities.id as id','provinces.name as provinces','cities.name as cities','cities.created_at as created_at')
        //         ->leftJoin('provinces', 'cities.provinces_id','=','provinces.id')->orderBy('cities.updated_at','desc');
    }
}

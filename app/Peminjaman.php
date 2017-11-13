<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\PeminjamanGallery;

class Peminjaman extends Model
{
    protected $table = 'peminjaman';

    public function member(){
        return $this->belongsTo('App\member','member_barcode');
    }

    public function PeminjamanGallery(){
        return $this->belongsTo('App\PeminjamanGallery','peminjaman_id');
    }


    public static function datatables()
    {
        // return static::select('directories.*','users.deleted as status','cities.name as city','categories.name as category')
        //     ->join('categories','directories.category_id','=','categories.id')
        //     ->leftJoin('users','directories.user_id','=','users.id')
        //     ->leftJoin('provinces','directories.province_id','=','provinces.id')
        //     ->leftJoin('cities','directories.city_id','=','cities.id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_Buku extends Model
{
	public $table = "buku";
    protected $fillable = ['stok','cover','barcode', 'judul', 'pengarang', 'penerbit', 'genre', 'jenis', 'sinopsis','disc','publicationyear','page'];
}

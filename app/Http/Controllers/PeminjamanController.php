<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Peminjaman;

class PeminjamanController extends Controller
{
    public function __construct(Peminjaman $model)
    {

    }

    public function index(Request $req)
    {
    	return view('admin.peminjaman.index');
   	}
}

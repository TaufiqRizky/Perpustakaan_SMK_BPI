<?php

use Illuminate\Database\Seeder;
use App\M_Jenis;

class JenisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jenis = new M_Jenis();
        $jenis->jenis = 'Buku Pelajaran';
        $jenis->save();
        
       	$jenis = new M_Jenis();
        $jenis->jenis = 'Novel';
        $jenis->save();


    }
}

<?php

use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jurusan = [
	        ['id'=>1, 'nama_jurusan'=>'Administrasi Perkantoran'],
        	['id'=>2, 'nama_jurusan'=>'Rekayasa Perangkat Lunak'],
        	['id'=>3, 'nama_jurusan'=>'Teknik Komputer Jaringan']
        ];

        foreach($jurusan as $data){
        	App\Jurusan::create($data);
        } 
    }
}

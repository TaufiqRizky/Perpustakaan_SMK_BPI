<?php

use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelas = [
	        ['id'=>1, 'kelas'=>'X'],
        	['id'=>2, 'kelas'=>'XI'],
        	['id'=>3, 'kelas'=>'XII']
        ];

        foreach($kelas as $data){
        	App\Kelas::create($data);
        } 
    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(JenisSeeder::class);
        $this->call(KelasSeeder::class);
        $this->call(JurusanSeeder::class);
        $this->call(GenreSeeder::class);
        $this->call(BookSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}

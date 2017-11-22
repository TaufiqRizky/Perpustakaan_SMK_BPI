<?php

use Illuminate\Database\Seeder;
use App\M_genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genre = new M_genre();
        $genre->jenis_id = '1';
        $genre->genre = 'Pelajaran';
        $genre->save();

        $genre = new M_genre();
        $genre->jenis_id = '2';
        $genre->genre = 'Action';
        $genre->save();

        $genre = new M_genre();
        $genre->jenis_id = '2';
        $genre->genre = 'Adventure';
        $genre->save();

        $genre = new M_genre();
        $genre->jenis_id = '2';
        $genre->genre = 'Komedi';
        $genre->save();

        $genre = new M_genre();
        $genre->jenis_id = '2';
        $genre->genre = 'Crime';
        $genre->save();

        $genre = new M_genre();
        $genre->jenis_id = '2';
        $genre->genre = 'Erotis';
        $genre->save();

        $genre = new M_genre();
        $genre->jenis_id = '2';
        $genre->genre = 'Faction';
        $genre->save();

        $genre = new M_genre();
        $genre->jenis_id = '2';
        $genre->genre = 'Fantasi';
        $genre->save();

        $genre = new M_genre();
        $genre->jenis_id = '2';
        $genre->genre = 'Historis';
        $genre->save();

        $genre = new M_genre();
        $genre->jenis_id = '2';
        $genre->genre = 'Horor';
        $genre->save();

        $genre = new M_genre();
        $genre->jenis_id = '2';
        $genre->genre = 'Misteri';
        $genre->save();

        $genre = new M_genre();
        $genre->jenis_id = '2';
        $genre->genre = 'Paranoid';
        $genre->save();

        $genre = new M_genre();
        $genre->jenis_id = '2';
        $genre->genre = 'Filosofi';
        $genre->save();

        $genre = new M_genre();
        $genre->jenis_id = '2';
        $genre->genre = 'Politik';
        $genre->save();

        $genre = new M_genre();
        $genre->jenis_id = '2';
        $genre->genre = 'Romance';
        $genre->save();

        $genre = new M_genre();
        $genre->jenis_id = '2';
        $genre->genre = 'Saga';
        $genre->save();

        $genre = new M_genre();
        $genre->jenis_id = '2';
        $genre->genre = 'Satir';
        $genre->save();

        $genre = new M_genre();
        $genre->jenis_id = '2';
        $genre->genre = 'Science Fiction';
        $genre->save();

        $genre = new M_genre();
        $genre->jenis_id = '2';
        $genre->genre = 'Slince of Life';
        $genre->save();

        $genre = new M_genre();
        $genre->jenis_id = '2';
        $genre->genre = 'Spekulatif';
        $genre->save();

        $genre = new M_genre();
        $genre->jenis_id = '2';
        $genre->genre = 'Thriller';
        $genre->save();

        $genre = new M_genre();
        $genre->jenis_id = '2';
        $genre->genre = 'Urban';
        $genre->save();

    }
}

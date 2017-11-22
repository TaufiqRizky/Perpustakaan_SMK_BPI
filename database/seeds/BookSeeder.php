<?php

use Illuminate\Database\Seeder;
use App\M_Buku;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = new M_Buku();
        $book->barcode = '9789797631741';
        $book->judul = 'Strategi Peracangan Iklan Outdoor Kelas Dunia';
        $book->pengarang = 'M. Suyanto';
        $book->penerbit = 'ANDI Yogyakarta';
        $book->jenis = '1';
        $book->genre = '1';
        $book->publicationyear = '2006';
        $book->page = '187';
        $book->save();

        $book = new M_Buku();
        $book->barcode = '9789792915600';
        $book->judul = 'Sistem Operasi';
        $book->pengarang = 'Abas Ali Pangera & Dony Ariyus';
        $book->penerbit = 'ANDI Yogyakarta';
        $book->jenis = '1';
        $book->genre = '1';
        $book->publicationyear = '2010';
        $book->page = '608';
        $book->save();

        $book = new M_Buku();
        $book->barcode = '9789792900590';
        $book->judul = 'Pemrograman Database dengan Visual Basic dan Microsoft SQL';
        $book->pengarang = 'Andi Sunyoto';
        $book->penerbit = 'CV ANDI OFFSET';
        $book->jenis = '1';
        $book->genre = '1';
        $book->publicationyear = '2007';
        $book->page = '258';
        $book->save();

        $book = new M_Buku();
        $book->barcode = '9789792902181';
        $book->judul = 'Mengenal Hardware-Software dan Pengelolaan Instansi Komputer';
        $book->pengarang = 'Melwin Syafrizal Daulay';
        $book->penerbit = 'CV ANDI OFFSET';
        $book->jenis = '1';
        $book->genre = '1';
        $book->publicationyear = '2007';
        $book->page = '320';
        $book->save();

		$book = new M_Buku();
        $book->barcode = '9789797638245';
        $book->judul = 'Strategi Perancang dan Pengelolaan Basis Data';
        $book->pengarang = 'Kusrini M.Kom';
        $book->penerbit = 'CV ANDI OFFSET';
        $book->jenis = '1';
        $book->genre = '1';
        $book->publicationyear = '2007';
        $book->page = '102';
        $book->save();

        $book = new M_Buku();
        $book->barcode = '9789797314460';
        $book->judul = 'Struktur Data dan Pemrograman dengan PASCAL';
        $book->pengarang = 'Heri Sismoro, S.Kom. & Kusrini Iskandar, S.Kom';
        $book->penerbit = 'ANDI Yogyakarta';
        $book->jenis = '1';
        $book->genre = '1';
        $book->publicationyear = '2004';
        $book->page = '161';
        $book->save();

        $book = new M_Buku();
        $book->barcode = '9789792905595';
        $book->judul = 'DIGITAL MULTIMEDIA: Animasi, Sound Editing, & Video Editing';
        $book->pengarang = 'Amir Fatah Sofyan & Agus Purwanto';
        $book->penerbit = 'ANDI Yogyakarta';
        $book->jenis = '1';
        $book->genre = '1';
        $book->publicationyear = '2008';
        $book->page = '104';
        $book->save();

        $book = new M_Buku();
        $book->barcode = '9789797635824';
        $book->judul = 'Dasar Pemrograman C++ disertai dengan pengenalan pemrograman berorientasi objek';
        $book->pengarang = 'Hanif Al Fatta, S.Kom.';
        $book->penerbit = 'CV ANDI OFFSET';
        $book->jenis = '1';
        $book->genre = '1';
        $book->publicationyear = '2006';
        $book->page = '106';
        $book->save();

        $book = new M_Buku();
        $book->barcode = '9789792901511';
        $book->judul = 'Pengantar Pemograman Terstruktur';
        $book->pengarang = 'Armadyah Amborowati';
        $book->penerbit = 'ANDI Yogyakarta';
        $book->jenis = '1';
        $book->genre = '1';
        $book->publicationyear = '2007';
        $book->page = '119';
        $book->save();

        $book = new M_Buku();
        $book->barcode = '9789797312381';
        $book->judul = 'Analisis & Desain Aplikasi Multimedia untuk Pemasaran.';
        $book->pengarang = 'M. Suyanto';
        $book->penerbit = 'ANDI Yogyakarta';
        $book->jenis = '1';
        $book->genre = '1';
        $book->publicationyear = '2004';
        $book->page = '309';
        $book->save();

        $book = new M_Buku();
        $book->barcode = '9789792905601';
        $book->judul = 'Komputer Grafis: Image Editing,Graphic Design,dan Page Layout';
        $book->pengarang = 'Amir Fatah Sofyan & Tony Hidayat';
        $book->penerbit = 'CV ANDY OFFSET';
        $book->jenis = '1';
        $book->genre = '1';
        $book->publicationyear = '2008';
        $book->page = '132 ';
        $book->save();

        $book = new M_Buku();
        $book->barcode = '9789792901948';
        $book->judul = 'Interaksi Manusia & Komputer';
        $book->pengarang = 'ST, MT & Dony Ariyus';
        $book->penerbit = 'CV ANDI OFFSET';
        $book->jenis = '1';
        $book->genre = '1';
        $book->publicationyear = '2007';
        $book->page = '398';
        $book->save();

        $book = new M_Buku();
        $book->barcode = '9789797635770';
        $book->judul = 'Merancang Film Kartun Kelas Dunia';
        $book->pengarang = 'M. Suyanto & Aryanto Yuniawan';
        $book->penerbit = 'CV ANDI OFFSET';
        $book->jenis = '1';
        $book->genre = '1';
        $book->publicationyear = '2006';
        $book->page = '136';
        $book->save();

        $book = new M_Buku();
        $book->barcode = '9789792901528';
        $book->judul = 'Konsep & aplikasi sistem Pendukung Keputusan';
        $book->pengarang = 'Kusrini, M.Kom';
        $book->penerbit = 'ANDI Yogyakarta';
        $book->jenis = '1';
        $book->genre = '1';
        $book->publicationyear = '2007';
        $book->page = '136';
        $book->save();

        $book = new M_Buku();
        $book->barcode = '9789797318123';
        $book->judul = 'Teknologi Informasi Untuk Bisnis';
        $book->pengarang = 'M.Suyanto';
        $book->penerbit = 'ANDI Yogyakarta';
        $book->jenis = '1';
        $book->genre = '1';
        $book->publicationyear = '2005';
        $book->page = '338';
        $book->save();

        $book = new M_Buku();
        $book->barcode = '9789797318406';
        $book->judul = 'Sistem Operasi';
        $book->pengarang = 'Abas Ali Pangera & Dony Ariyus';
        $book->penerbit = 'ANDI Yogyakarta';
        $book->jenis = '1';
        $book->genre = '1';
        $book->publicationyear = '2005';
        $book->page = '212';
        $book->save();

    }
}

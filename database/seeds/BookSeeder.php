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
        $book->stok = '5';
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
        $book->stok = '4';
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
        $book->stok = '7';
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
        $book->stok = '5';
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
        $book->stok = '10';
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
        $book->stok = '1';
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
        $book->stok = '9';
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
        $book->stok = '8';
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
        $book->stok = '1';
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
        $book->stok = '6';
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
        $book->stok = '7';
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
        $book->stok = '6';
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
        $book->stok = '6';
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
        $book->stok = '3';
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
        $book->stok = '7';
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
        $book->stok = '3';
        $book->publicationyear = '2005';
        $book->page = '212';
        $book->save();

        $book = new M_Buku();
        $book->barcode = '9789797630034';
        $book->judul = 'Pengantar Jaringan Komputer';
        $book->pengarang = 'Melwin Syafrizal';
        $book->penerbit = 'CV ANDI OFFSET';
        $book->jenis = '1';
        $book->genre = '1';
        $book->stok = '4';
        $book->publicationyear = '2005';
        $book->page = '271';
        $book->save();

        $book = new M_Buku();
        $book->barcode = '9789792905502';
        $book->judul = 'Mengoptimalkan Query Pada MsSQL Server';
        $book->pengarang = 'Ema Utami Sukrino';
        $book->penerbit = 'ANDI Yogyakarta';
        $book->jenis = '1';
        $book->genre = '1';
        $book->stok = '1';
        $book->publicationyear = '2008';
        $book->page = '118';
        $book->save();

        $book = new M_Buku();
        $book->barcode = '9789792913880';
        $book->judul = 'Adobe Flash+XML = Rich Multimedia Application';
        $book->pengarang = 'Andi Sunyoto M.Kom';
        $book->penerbit = 'CV ANDI OFFSET';
        $book->jenis = '1';
        $book->genre = '1';
        $book->stok = '5';
        $book->publicationyear = '2010';
        $book->page = '292';
        $book->save();

        $book = new M_Buku();
        $book->barcode = '9789792908091';
        $book->judul = 'Algoritma Data Mining';
        $book->pengarang = 'Kusrini M.Kom';
        $book->penerbit = 'ANDI Yogyakarta';
        $book->jenis = '1';
        $book->genre = '1';
        $book->stok = '5';
        $book->publicationyear = '2009';
        $book->page = '212';
        $book->save();

        $book = new M_Buku();
        $book->barcode = '9789792906158';
        $book->judul = 'Komunikasi Data';
        $book->pengarang = 'Doni Ariyus & Rum Andri K.R';
        $book->penerbit = 'CV ANDI OFFSET';
        $book->jenis = '1';
        $book->genre = '1';
        $book->stok = '3';
        $book->publicationyear = '2008';
        $book->page = '492';
        $book->save();

        $book = new M_Buku();
        $book->barcode = '9789792927597';
        $book->judul = 'Pemrograman Web Dinamis Menggunakan PHP dan MySQL';
        $book->pengarang = 'M. Rudyanto Arief';
        $book->penerbit = 'ANDI Yogyakarta';
        $book->jenis = '1';
        $book->genre = '1';
        $book->stok = '4';
        $book->publicationyear = '2011';
        $book->page = '446';
        $book->save();

        $book = new M_Buku();
        $book->barcode = '9789792902167';
        $book->judul = 'Analisis dan Perancangan Sistem Informasi';
        $book->pengarang = 'Hanif Al Fatta';
        $book->penerbit = 'ANDI Yogyakarta';
        $book->jenis = '1';
        $book->genre = '1';
        $book->stok = '3';
        $book->publicationyear = '2007';
        $book->page = '211';
        $book->save();

        $book = new M_Buku();
        $book->barcode = '9789797630065';
        $book->judul = 'Konsep Dasar Pengolahan dan Pemrograman Database Dengan SQL Server, Ms.Acces dan Ms.Visual Basic';
        $book->pengarang = 'Ema Utami';
        $book->penerbit = 'ANDI Yogyakarta';
        $book->jenis = '1';
        $book->genre = '1';
        $book->stok = '1';
        $book->publicationyear = '2005';
        $book->page = '127';
        $book->save();

        $book = new M_Buku();
        $book->barcode = '9789797319625';
        $book->judul = 'E-Commerce Perusahaan Top Dunia';
        $book->pengarang = 'M.Suryanto';
        $book->penerbit = 'CV ANDI OFFSET';
        $book->jenis = '1';
        $book->genre = '1';
        $book->stok = '11';
        $book->publicationyear = '2002';
        $book->page = '265';
        $book->save();

        $book = new M_Buku();
        $book->barcode = '9789797631734';
        $book->judul = 'Pemrograman Basis Data Menggunakan Transact-SQL dengan Microsoft SQL Server 2000';
        $book->pengarang = 'M. Rudyanto Arief';
        $book->penerbit = 'CV ANDI OFFSET';
        $book->jenis = '1';
        $book->genre = '1';
        $book->stok = '1';
        $book->publicationyear = '2005';
        $book->page = '278';
        $book->save();

        $book = new M_Buku();
        $book->barcode = '9789797630041';
        $book->judul = 'Logika Informatika, Algoritma dan Pemograman Komputer ';
        $book->pengarang = 'Heri Sismoro';
        $book->penerbit = 'CV ANDI OFFSET';
        $book->jenis = '1';
        $book->genre = '1';
        $book->stok = '9';
        $book->publicationyear = '2005';
        $book->page = '278';
        $book->save();

        $book = new M_Buku();
        $book->barcode = '9789797630614';
        $book->judul = 'MULTIMEDIA , Alat untuk meningkatkan keunggulan bersaing';
        $book->pengarang = 'M. Suyanto';
        $book->penerbit = 'ANDI Yogyakarta';
        $book->jenis = '1';
        $book->genre = '1';
        $book->stok = '3';
        $book->publicationyear = '2003, 2005';
        $book->page = '400';
        $book->save();

        $book = new M_Buku();
        $book->barcode = '9789792905939';
        $book->judul = 'Menjadi Administrator Jaringan Nirkabel';
        $book->pengarang = 'Abbas Ali Pangera';
        $book->penerbit = 'ANDI Yogyakarta';
        $book->jenis = '1';
        $book->genre = '1';
        $book->stok = '4';
        $book->publicationyear = '2008';
        $book->page = '272';
        $book->save();

        $book = new M_Buku();
        $book->barcode = '9789797314620';
        $book->judul = 'Pemrograman GUI di GNU/Linux';
        $book->pengarang = 'Ema Utami';
        $book->penerbit = 'ANDI Yogyakarta';
        $book->jenis = '1';
        $book->genre = '1';
        $book->stok = '1';
        $book->publicationyear = '2004';
        $book->page = '188';
        $book->save();

        $book = new M_Buku();
        $book->barcode = '9789797317959';
        $book->judul = 'Strategi Perancangan Iklan Televisi Perusahaan Dunia';
        $book->pengarang = 'M. Suyanto';
        $book->penerbit = 'ANDI Yogyakarta';
        $book->jenis = '1';
        $book->genre = '1';
        $book->stok = '4';
        $book->publicationyear = '2005';
        $book->page = '185';
        $book->save();

        $book = new M_Buku();
        $book->barcode = '9789797313999';
        $book->judul = 'Aplikasi Desain Grafis Untuk Periklanan Dilengkapi Sampel Iklan Terbaik Kelas Dunia';
        $book->pengarang = 'M. Suyanto';
        $book->penerbit = 'ANDI Yogyakarta';
        $book->jenis = '1';
        $book->genre = '1';
        $book->stok = '4';
        $book->publicationyear = '2004';
        $book->page = '158';
        $book->save();

        $book = new M_Buku();
        $book->barcode = '9789792905700';
        $book->judul = 'Aplikasi Sistem Pakar';
        $book->pengarang = 'Kusrini M.Kom';
        $book->penerbit = 'CV ANDI OFFSET';
        $book->jenis = '1';
        $book->genre = '1';
        $book->stok = '1';
        $book->publicationyear = '2008';
        $book->page = '137';
        $book->save();
    }
}

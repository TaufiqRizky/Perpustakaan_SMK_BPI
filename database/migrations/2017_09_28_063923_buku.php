<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Buku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->increments('id');
            $table->string('barcode')->unique();
            $table->string('cover')->nullable();
            $table->string('judul');
            $table->string('pengarang');
            $table->string('penerbit');
            $table->string('genre')->nullable();
            $table->string('jenis')->nullable();
            $table->integer('stok')->nullable();
            $table->text('sinopsis')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('buku');
    }
}

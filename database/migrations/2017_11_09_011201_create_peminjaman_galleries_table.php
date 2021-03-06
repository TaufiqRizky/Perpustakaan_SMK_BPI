<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeminjamanGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman_galleries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('peminjaman_id')->unsigned();
            $table->foreign('peminjaman_id')->references('id')->on('peminjaman');
            $table->string('buku_barcode');
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
        Schema::dropIfExists('peminjaman_galleries');
    }
}

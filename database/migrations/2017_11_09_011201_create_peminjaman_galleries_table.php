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
<<<<<<< HEAD
            $table->foreign('peminjaman_id')
                    ->references('id')
                    ->on('peminjaman')
                    ->onDelete('CASCADE');
            $table->string('buku_barcode')->unique();
=======
            $table->foreign('peminjaman_id')->references('id')->on('peminjaman');
            $table->string('buku_barcode');
>>>>>>> efe00ce2323182186f2d4b413ddb88eef6f2b4ba
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

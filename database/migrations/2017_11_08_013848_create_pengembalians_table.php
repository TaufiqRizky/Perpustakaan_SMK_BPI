<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengembaliansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengembalian', function (Blueprint $table) {
            $table->increments('id');
            $table->string('member_barcode')->nullable();
             $table->foreign('member_barcode')
                  ->references('barcode')
                  ->on('member')
                  ->onDelete('CASCADE');
            $table->string('buku_barcode')->unique()->nullable();
                 $table->foreign('buku_barcode')
                  ->references('barcode')
                  ->on('buku')
                  ->onDelete('CASCADE');
       
            $table->integer('id_peminjaman');
       
            $table->date('tgl_dikembalikan')->nullable();
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
        Schema::dropIfExists('pengembalian');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PengembalianGalleries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengembalian_galleries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pengembalian_id')->unsigned();
<<<<<<< HEAD
            $table->foreign('pengembalian_id')
                    ->references('id')
                    ->on('pengembalian')
                    ->onDelete('CASCADE');
            $table->string('buku_barcode')->unique();
=======
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
        //
    }
}

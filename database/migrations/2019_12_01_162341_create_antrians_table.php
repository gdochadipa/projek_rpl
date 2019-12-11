<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntriansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antrians', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nomor_antrian');
            $table->date('tgl_reservasi');
            $table->bigInteger('id_poli')->unsigned();
            $table->bigInteger('id_pasien')->unsigned();
            $table->bigInteger('id_js_pembayaran')->unsigned();
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
        Schema::dropIfExists('antrians');
    }
}

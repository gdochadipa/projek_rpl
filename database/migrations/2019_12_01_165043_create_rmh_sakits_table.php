<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRmhSakitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rmh_sakits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nm_rmh_sakit',50);
            $table->string('alamat',255);
            $table->string('deskripsi',255);
            $table->bigInteger('id_kecamatan')->unsigned();
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
        Schema::dropIfExists('rmh_sakits');
    }
}

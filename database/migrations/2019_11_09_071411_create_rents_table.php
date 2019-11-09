<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rents', function (Blueprint $table) {
            $table->bigIncrements('id_rent');
            $table->string('name_rent');
            $table->string('jenis_ikan_rent');
            $table->string('tgl_masuk');
            $table->string('tgl_keluar');
            $table->integer('berat_rent');
            $table->string('status');
            $table->integer('toal_biaya_rent');
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
        Schema::dropIfExists('rents');
    }
}

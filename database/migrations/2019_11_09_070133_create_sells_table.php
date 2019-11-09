<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sells', function (Blueprint $table) {
            $table->bigIncrements('id_sell');
            $table->string('name_sell');
            $table->string('jenis_ikan_sell');
            $table->string('tgl_sell');
            $table->string('tgl_bayar');
            $table->integer('berat_sell');
            $table->string('status');
            $table->integer('toal_biaya_sell');
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
        Schema::dropIfExists('sells');
    }
}

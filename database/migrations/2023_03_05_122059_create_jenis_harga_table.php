<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJenisHargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_harga', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_lab')->nullable();
            $table->string('jenis_pengujian')->nullable();
            $table->string('satuan')->nullable();
            $table->integer('tarif')->nullable();
            $table->string('lama_pengujian')->nullable();
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
        Schema::dropIfExists('jenis_harga');
    }
}
